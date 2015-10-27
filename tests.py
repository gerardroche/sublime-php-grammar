from threading import Thread
import sublime
import sublime_plugin
import unittest
import os
import glob
import re

DEBUG_MODE=bool(os.getenv('SUBLIME_PHP_GRAMMAR_DEBUG'))

if DEBUG_MODE:
    def debug_message(message):
        print('[php-grammar] [test] %s' % str(message))
else:
    def debug_message(message):
        pass

class Configuration():
    def on_load(self):
        self.package_root_path = os.path.dirname(__file__)
        self.package_name = os.path.basename(self.package_root_path)
        self.tests_root_path = os.path.join(self.package_root_path, 'tests')

        if int(sublime.version()) >= 3092:
            self.syntax_file_path = os.path.join('Packages', self.package_name, 'PHP.sublime-syntax')
        else:
            self.syntax_file_path = os.path.join('Packages', self.package_name, 'PHP.tmLanguage')

configuration = Configuration()

def plugin_loaded():
    configuration.on_load()

class SublimeViewAPI():

    def __init__(self, view):
        self.view = view

    def to_str(self):
        return self.view.substr(sublime.Region(0, self.view.size()))

    def to_scope_name_repr(self, region=None):
        """
        Returns a string scope name representation of the
        view content.  Each point in the view is converted to
        a scope name.  A newline is appended to each scope name.
        """
        content = ''

        if region == None:
            in_range = range(self.view.size())
        else:
            in_range = range(region.begin(), region.end())

        for point in in_range:
            content += self.view.scope_name(point).strip() + "\n"

        return content.strip()

class GeneratePhpGrammarSyntaxTestExpectation(sublime_plugin.TextCommand):

    def run(self, edit):

        test_begin_line_region = self.view.find('^--TEST--$', 0)
        file_begin_line_region = self.view.find('^--FILE--$', 0)
        expect_begin_line_region = self.view.find('^--EXPECT--$', 0)

        if test_begin_line_region.empty() or file_begin_line_region.empty() or expect_begin_line_region.empty():
            return

        file_desciption_region = sublime.Region(test_begin_line_region.end() + 1, file_begin_line_region.begin() - 1)
        file_content_region = sublime.Region(file_begin_line_region.end() + 1, expect_begin_line_region.begin() - 1)
        expect_content_region = sublime.Region(expect_begin_line_region.end() + 1, self.view.size())

        if file_desciption_region.empty() or file_content_region.empty():
            return

        file_content_scope_repr = SublimeViewAPI(self.view).to_scope_name_repr(file_content_region)

        self.view.replace(edit, expect_content_region, file_content_scope_repr.strip())

    def is_enabled(self):
        if not self.view.file_name():
            return False
        return bool(re.match('.*[a-z][a-z0-9_]*[a-z0-9]_test.php$', self.view.file_name()))

if DEBUG_MODE:

    class PhpGrammarShowCursorScopeNameInStatusLine(sublime_plugin.EventListener):

        """
        Updates the status line with the scope name under the cursor.
        """

        def on_post_text_command(self, view, command_name, args):
            self.update_scope(view)

        def on_post_window_command(self, window, command_name, args):
            view = window.active_view()
            if not view:
                return

            self.update_scope(view)

        if 3000 <= int(sublime.version()) < 3070:
            # Works around issue where on_post_window_command never gets called
            # See https://github.com/SublimeTextIssues/Core/issues/141
            def on_window_command(self, window, command_name, args):
                self.on_post_window_command(window, command_name, args)

        def update_scope(self, view):
            for region in view.sel():
                scope_name = view.scope_name(region.begin()).strip()
                view.set_status('scope', 'Scope: "' + scope_name + '"')
                return

class __php_grammar_test_view_replace(sublime_plugin.TextCommand):

    def run(self, edit, text):
        self.view.replace(edit, sublime.Region(0, self.view.size()), text)

class __php_grammar_test_view_replace_cursor(sublime_plugin.TextCommand):

    def run(self, edit, reverse=False):

        if reverse:
            cursor_position = self.view.sel()[0]
            self.view.replace(edit, cursor_position, '|')
        else:
            cursor_placeholder = self.view.find('\|', 0)

            if not cursor_placeholder or cursor_placeholder.empty():
                return

            self.view.sel().clear()
            self.view.sel().add(cursor_placeholder.begin())
            self.view.replace(edit, cursor_placeholder, '')

class ViewTestCase(unittest.TestCase):

    def setUp(self):
        self.view = sublime.active_window().new_file()
        self.view.set_scratch(True)
        self.view.settings().set('auto_indent', False)
        self.view.settings().set('indent_to_bracket', False)
        self.view.settings().set('tab_size', 4)
        self.view.settings().set('trim_automatic_white_space', False)
        self.view.settings().set('smart_indent', True)
        self.view.settings().set('tab_size', 4)
        self.view.settings().set('translate_tabs_to_spaces', True)
        self.view.set_syntax_file(configuration.syntax_file_path)
        self.maxDiff = None

    def tearDown(self):
        if self.view:
            self.view.close()

    def set_view_content(self, content, replace_cursor_position=False):
        self.view.run_command('__php_grammar_test_view_replace', {'text': content})
        if replace_cursor_position:
            self.view.run_command('__php_grammar_test_view_replace_cursor')

    def get_view_content(self, replace_cursor_position=False):
        if replace_cursor_position:
            self.view.run_command('__php_grammar_test_view_replace_cursor', {'reverse': True})
        return SublimeViewAPI(self.view).to_str()

    def view_to_scope_name_repr(self):
        return SublimeViewAPI(self.view).to_scope_name_repr()

class TestFile():

    def __init__(self, description, actual_content, expected_content, syntax = None):
        self.description = description
        self.actual_content = actual_content
        self.expected_content = expected_content
        self.syntax = syntax

    def from_file(file_name):
        with open(file_name) as f:
            actual_content = f.read()

        if '--TEST--' in actual_content:
            res = re.split('--([A-Z]+)--\n', actual_content)

            error_message = 'invalid test file: %s' % file_name

            if 'TEST' not in res:
                raise RuntimeError(error_message)

            if 'FILE' not in res:
                raise RuntimeError(error_message)

            if 'EXPECT' not in res:
                raise RuntimeError(error_message)

            description = res[res.index('TEST') + 1].strip()
            actual_content = res[res.index('FILE') + 1].strip()
            expected_content = res[res.index('EXPECT') + 1].strip()
            syntax = None
            if 'SYNTAX' in res:
                syntax = res[res.index('SYNTAX') + 1].strip()
        else:
            description = file_name
            with open(file_name.replace('_test.php', '_test_expect.php')) as f:
                expected_content = f.read()
            syntax = None

        return TestFile(description, actual_content, expected_content, syntax)

class TestIndentation(ViewTestCase):

    def test_indentation_file_tests(self):

        test_files = glob.glob(os.path.join(configuration.tests_root_path, 'indentation') + '/*_test.php')

        for test_file_name in test_files:

            test_file = TestFile.from_file(test_file_name)
            self.set_view_content(test_file.actual_content)
            self.view.run_command('reindent', { 'force_indent': True, 'single_line': False })
            self.assertEqual(test_file.expected_content, self.get_view_content(), "\n\ntest:" + test_file_name)

class TestSyntax(ViewTestCase):

    def test_syntax_file_tests(self):

        if int(sublime.version()) >= 3092:
            test_files = glob.glob(os.path.join(configuration.tests_root_path, 'syntax') + '/gt_or_eq_3092/*_test.php')
        else:
            test_files = glob.glob(os.path.join(configuration.tests_root_path, 'syntax') + '/lt_3092/*_test.php')

        for test_file_name in test_files:

            test_file = TestFile.from_file(test_file_name)
            if test_file.syntax:
                self.view.set_syntax_file(test_file.syntax)

            self.set_view_content(test_file.actual_content)

            if ':' not in test_file.expected_content:
                self.assertEqual(test_file.expected_content, self.view_to_scope_name_repr(), "\n\ntest:" + test_file_name)
            else:
                assertions = test_file.expected_content.splitlines()
                for assertion in assertions:
                    if not len(assertion) > 0:
                        # allow blank lines
                        continue

                    assertion = assertion.split(':')

                    name = assertion[0]
                    line = int(assertion[1])
                    offset = int(assertion[2])
                    selector = assertion[3]

                    if name == 'match':
                        self.assertMatchSelector(line, offset, selector)
                    elif name == 'equal':
                        self.assertEqualsScope(line, offset, selector)
                    else:
                        raise RuntimeError('Invalid syntax test file: %s' % test_file_name)

    def assertMatchSelector(self, line, offset, selector):
        point = self.view.text_point(line, offset)
        selector_score = self.view.score_selector(point, selector)
        actual_scope = self.view.scope_name(point).strip()
        self.assertGreater(selector_score, 0, 'Expected selector score greater than 0 for (line:%s, offset:%s, point:%s, selector:%s) *** ACTUAL: "%s"' % (line, offset, point, selector, actual_scope))

    def assertEqualsScope(self, line, offset, expected_scope):
        point = self.view.text_point(line, offset)
        actual_scope = self.view.scope_name(point).strip()
        self.assertEqual(expected_scope, actual_scope)

class OutputPanel(object):

    def __init__(self, window, name):

        self.name = name
        self.window = window

        self.view = self.window.create_output_panel(self.name)
        self.view.settings().set('word_wrap', True)
        self.view.settings().set('line_numbers', False)
        self.view.settings().set('gutter', False)
        self.view.settings().set('scroll_past_end', False)

    def write(self, s):
        f = lambda: self.view.run_command('append', {'characters': s})
        sublime.set_timeout(f, 0)

    def flush(self):
        pass

    def show(self):
        self.window.run_command('show_panel', {'panel': 'output.' + self.name})

    def close(self):
        pass

class TextTestRunner():

    def __init__(self, window):
        self.window = window
        self.test_loader = unittest.TestLoader()
        self.suite = unittest.TestSuite()
        self.syntax_tests_added = False

    def run_all_tests(self):
        self._add_all_indentation_tests()
        self._add_all_syntax_tests()
        self._run()

    def run_syntax_tests(self):
        self._add_all_syntax_tests()
        self._run()

    def _add_all_syntax_tests(self):
        self.suite.addTest(self.test_loader.loadTestsFromTestCase(TestSyntax))
        self.syntax_tests_added = True

    def run_indentation_tests(self):
        self._add_all_indentation_tests()
        self._run()

    def _add_all_indentation_tests(self):
        self.suite.addTest(self.test_loader.loadTestsFromTestCase(TestIndentation))

    def _run(self):

        display = OutputPanel(self.window, 'php-grammar.tests')
        display.show()

        runner = unittest.TextTestRunner(stream=display, verbosity=1)

        def run_and_display():

            if self.syntax_tests_added:
                import sublime_api
                output = "Running **/syntax_test_* tests...\n"
                tests = sublime.find_resources("syntax_test*")
                num_failed = 0
                for t in tests:
                    test_output = sublime_api.run_syntax_test(t)
                    if len(test_output) > 0:
                        num_failed += 1
                        output += test_output + "\n"

                self.append_string_to_display(display, output)

                if num_failed > 0:
                    self.append_string_to_display(display, "FAILED: %d of %d tests failed\n\n" % (num_failed, len(tests)))
                else:
                    self.append_string_to_display(display, "Success: %d tests passed\n\n" % len(tests))

            runner.run(self.suite)

        Thread(target=run_and_display).start()

    def append_string_to_display(self, display, string):
        display.view.run_command('append', {
            'characters': string,
            'force': True,
            'scroll_to_end': True
        })

class RunPhpGrammarIndentationTests(sublime_plugin.WindowCommand):

    def run(self):
        test_runner = TextTestRunner(self.window)
        test_runner.run_indentation_tests()

class RunPhpGrammarSyntaxTests(sublime_plugin.WindowCommand):

    def run(self):
        test_runner = TextTestRunner(self.window)
        test_runner.run_syntax_tests()

class RunPhpGrammarTests(sublime_plugin.WindowCommand):

    def run(self):
        test_runner = TextTestRunner(self.window)
        test_runner.run_all_tests()
