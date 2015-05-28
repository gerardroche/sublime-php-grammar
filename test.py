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

class Config():
    def __init__(self):
        self.package_root_path = os.path.dirname(__file__)
        self.package_name = os.path.basename(self.package_root_path)
        self.syntax_file_path = os.path.join('Packages', self.package_name, 'PHP.tmLanguage')
        self.tests_path = os.path.join(self.package_root_path, 'test')

        self.indentation_tests_path = os.path.join(self.tests_path, 'indentation')
        self.indentation_test_file_extension = '_test.php'
        self.indentation_test_expect_file_extension = '_test_expect.php'

        self.syntax_tests_path = os.path.join(self.tests_path, 'syntax')
        self.syntax_test_file_extension = '_test.php'

config = Config()

if DEBUG_MODE:

    class PhpGrammarDevUtilScopeStatus(sublime_plugin.EventListener):

        """
        Updates the status line with the scope name under the cursor.
        """

        def on_post_text_command(self, view, command_name, args):
            for region in view.sel():
                scope_name = view.scope_name(region.begin()).strip()
                view.set_status('scope', scope_name)
                return

        def on_post_window_command(self, window, command_name, args):
            for region in window.active_view().sel():
                scope_name = window.active_view().scope_name(region.begin()).strip()
                window.active_view().set_status('scope', 'Scope Name: "' + scope_name + '"')
                return

        if 3000 <= int(sublime.version()) < 3070:
            # Works around issue where on_post_window_command never gets called
            # See https://github.com/SublimeTextIssues/Core/issues/141
            def on_window_command(self, window, command_name, args):
                self.on_post_window_command(window, command_name, args)

    # TODO implement a better syntax test helper tool
    class PhpGrammarSyntaxTestHelperTool(sublime_plugin.TextCommand):

        """
        Print & copy-to-clipboard the scope selection.
        """

        def run(self, edit, assertion = None):

            view_region = sublime.Region(0, self.view.size())
            view_as_string = self.view.substr(view_region)
            test_file = TestFile.from_string(view_as_string)

            print(self.view.file_name())

            if test_file:
                for line_region in self.view.split_by_newlines(view_region):
                    line = self.view.substr(line_region)
                    row_col = self.view.rowcol(line_region.begin())
                    if '--FILE--' in line:
                        test_file_content_begin_row = row_col[0] + 1
                    if '--EXPECT--' in line:
                        test_file_expect_begin_point = line_region.end() + 1

            scope_repr = ''
            for sel in self.view.sel():
                for point in range(sel.begin(), sel.end()):
                    if assertion is not None:
                        row_col = self.view.rowcol(point)
                        row = row_col[0]
                        if test_file:
                            row = row - test_file_content_begin_row
                        col = row_col[1]
                        scope_repr += assertion + ':%s:%s:' % (row, col)
                    scope_repr += self.view.scope_name(point).strip() + "\n"
            scope_repr = scope_repr.strip()

            print('***')
            print(scope_repr)
            print('***')

            if test_file and test_file_expect_begin_point:
                region = sublime.Region(test_file_expect_begin_point, self.view.size())
                self.view.replace(edit, region, scope_repr)

            sublime.set_clipboard(scope_repr)

class ViewTestCase(unittest.TestCase):

    def setUp(self):
        self.view = sublime.active_window().new_file()
        self.view.set_scratch(True)
        self.view.settings().set('auto_indent', False)
        self.view.settings().set('indent_to_bracket', False)
        self.view.settings().set('tab_size', 4)
        self.view.settings().set('trim_automatic_white_space', False)
        self.view.settings().set('smart_indent', True)
        self.view.set_syntax_file(config.syntax_file_path)

    def tearDown(self):
        if self.view:
            self.view.close()

    def set_view_content(self, content):
        self.view.run_command('insert', {'characters': content})

    def view_to_str(self):
        return self.view.substr(sublime.Region(0, self.view.size()))

    def view_to_scope_name_repr(self):
        """
        Returns a string "scope names" representation of the
        view content. Each point in the view is converted to
        a scope name. A newline is appended to each scope name.
        """
        content = ''
        for point in range(self.view.size()):
            content += self.view.scope_name(point).strip() + "\n"

        return content.strip()

class TestFile():

    def __init__(self, test, content, expect):
        self.test = test
        self.content = content
        self.expect = expect

    def from_file(file_name, raise_if_not_valid_msg=None):
        with open(file_name) as f:
            return TestFile.from_string(f.read(), raise_if_not_valid_msg)

    def from_view(view):
        return TestFile.from_string(view.substr(sublime.Region(0, view.size())))

    def from_string(string, raise_if_not_valid_msg = None):
        res = re.match('^--TEST--\n(.+)\n--FILE--\n(.*)\n--EXPECT--\n(.*)\n$', string, re.DOTALL)

        if not res:
            if raise_if_not_valid_msg is not None:
                raise RuntimeError(raise_if_not_valid_msg)
            else:
                return None

        return TestFile(res.group(1), res.group(2), res.group(3))

class TestIndentation(ViewTestCase):

    def getFileContents(self, name, ext):
        file_name = os.path.join(config.indentation_tests_path, name + ext)
        with open(file_name) as f:
            return f.read()

    def createFileDataProviderTest(test_file_name):
        def indentationTest(self):
            content = self.getFileContents(test_file_name, config.indentation_test_file_extension)

            if '--TEST--' in content:
                test_file = TestFile.from_string(content, 'Invalid indentation test: %s' % test_file_name)
                content = test_file.content
                expected_str = test_file.expect
            else:
                expected_str = self.getFileContents(test_file_name, config.indentation_test_expect_file_extension)

            self.set_view_content(content)
            self.view.run_command('reindent', {
                'force_indent': True,
                'single_line': False
            })
            self.assertEqual(expected_str, self.view_to_str())

        return indentationTest

class TestSyntax(ViewTestCase):

    def assertMatchSelector(self, line, offset, selector):
        point = self.view.text_point(line, offset)
        selector_score = self.view.score_selector(point, selector)
        actual_scope = self.view.scope_name(point).strip()
        self.assertGreater(selector_score, 0, 'Expected selector score greater than 0 for (line:%s, offset:%s, point:%s, selector:%s) *** ACTUAL: "%s"' % (line, offset, point, selector, actual_scope))

    def assertEqualsScope(self, line, offset, expected_scope):
        point = self.view.text_point(line, offset)
        actual_scope = self.view.scope_name(point).strip()
        self.assertEqual(expected_scope, actual_scope)

    def createFileDataProviderTest(test_file_name):
        def syntaxTest(self):
            test_file = TestFile.from_file(
                os.path.join(config.syntax_tests_path, test_file_name + config.syntax_test_file_extension),
                'Invalid syntax test: %s' % test_file_name
            )

            self.set_view_content(test_file.content)

            if ':' not in test_file.expect:
                self.assertEquals(test_file.expect, self.view_to_scope_name_repr())
            else:
                assertions = test_file.expect.splitlines()
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

        return syntaxTest

class RunPhpGrammarIndentationTests(sublime_plugin.WindowCommand):

    def run(self):
        print('')
        print('')
        print('Running PHP Grammar Indentation Tests')
        print('=====================================')

        self.window.run_command('show_panel', {'panel': 'console'})

        # Setup data providers
        for test_file_name in glob.glob(config.indentation_tests_path + '/*' + config.indentation_test_file_extension):
            name = os.path.basename(test_file_name).rpartition(config.indentation_test_file_extension)[0]
            if re.search('^[a-z][a-z0-9_]*[a-z0-9]$', name):
                setattr(TestIndentation, 'test_file_data_provider_%s' % name, TestIndentation.createFileDataProviderTest(name))
            else:
                raise RuntimeError('Invalid indentation test file name: %s' % name)

        unittest.TextTestRunner(verbosity=1).run(
            unittest.TestLoader().loadTestsFromTestCase(TestIndentation)
        )

        self.window.focus_group(self.window.active_group())

class RunPhpGrammarSyntaxTests(sublime_plugin.WindowCommand):

    def run(self):
        print('')
        print('')
        print('Running PHP Grammar Syntax Tests')
        print('================================')

        self.window.run_command('show_panel', {'panel': 'console'})

        # Setup data providers
        for test_file_name in glob.glob(config.syntax_tests_path + '/*' + config.syntax_test_file_extension):
            name = os.path.basename(test_file_name).rpartition(config.syntax_test_file_extension)[0]
            if re.search('^[a-z][a-z0-9_]*[a-z0-9]$', name):
                setattr(TestSyntax, 'test_file_data_provider_%s' % name, TestSyntax.createFileDataProviderTest(name))
            else:
                raise RuntimeError('Invalid language test file name: %s' % name)

        unittest.TextTestRunner(verbosity=1).run(
            unittest.TestLoader().loadTestsFromTestCase(TestSyntax)
        )

        self.window.focus_group(self.window.active_group())

class RunPhpGrammarTests(sublime_plugin.WindowCommand):

    def run(self):
        self.window.run_command('run_php_grammar_syntax_tests')
        self.window.run_command('run_php_grammar_indentation_tests')
