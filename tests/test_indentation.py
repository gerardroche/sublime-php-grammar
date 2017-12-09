from unittest import TestCase
import glob
import os
import re

import sublime


class TestFile():

    def __init__(self, description, actual_content, expected_content, syntax=None):
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


def view_to_str(view):
    return view.substr(sublime.Region(0, view.size()))


def view_to_scope_name_repr(view, region=None):
    content = ''

    if region is None:
        in_range = range(view.size())
    else:
        in_range = range(region.begin(), region.end())

    for point in in_range:
        content += view.scope_name(point).strip() + "\n"

    return content.strip()


class ViewTestCase(TestCase):

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

        if int(sublime.version()) >= 3154:
            syntax_file_path = os.path.join('Packages', 'PHP', 'PHP.sublime-syntax')
        elif int(sublime.version()) >= 3092:
            syntax_file_path = os.path.join('Packages', 'php-grammar', 'PHP.sublime-syntax')
        else:
            syntax_file_path = os.path.join('Packages', 'php-grammar', 'PHP.tmLanguage')

        self.view.set_syntax_file(syntax_file_path)
        self.maxDiff = None

    def tearDown(self):
        if self.view:
            self.view.close()

    def set_view_content(self, content, replace_cursor_position=False):
        self.view.run_command('_php_grammar_test_view_replace', {'text': content})
        if replace_cursor_position:
            self.view.run_command('_php_grammar_test_view_replace_cursor')

    def get_view_content(self, replace_cursor_position=False):
        if replace_cursor_position:
            self.view.run_command('_php_grammar_test_view_replace_cursor', {'reverse': True})

        return view_to_str(self.view)

    def view_to_scope_name_repr(self):
        return view_to_scope_name_repr(self.view)


class TestIndentation(ViewTestCase):

    def test_all(self):
        test_files = glob.glob(os.path.join(os.path.dirname(__file__), 'indentation') + '/*_test.php')
        for test_file_name in test_files:
            test_file = TestFile.from_file(test_file_name)
            self.set_view_content(test_file.actual_content)

            self.view.run_command('reindent', {'force_indent': True, 'single_line': False})
            self.assertEqual(test_file.expected_content, self.get_view_content(), "\n\ntest:" + test_file_name)
