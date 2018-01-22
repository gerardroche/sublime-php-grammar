from unittest import TestCase  # noqa: F401

import sublime


def view_to_str(view):
    return view.substr(sublime.Region(0, view.size()))


def view_to_scope_name_repr(view, region=None):
    content = ''

    if region is None:
        in_range = range(view.size())
    else:
        in_range = range(region.begin(), region.end())

    for point in in_range:
        # scope_name() needs to striped due to a bug in ST:
        # See https://github.com/SublimeTextIssues/Core/issues/657.
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
            syntax_file_path = 'Packages/PHP/PHP.sublime-syntax'
        elif int(sublime.version()) >= 3092:
            syntax_file_path = 'Packages/PHP/PHP.sublime-syntax'
        else:
            syntax_file_path = 'Packages/PHP/PHP.tmLanguage'

        self.view.set_syntax_file(syntax_file_path)
        self.maxDiff = None

    def tearDown(self):
        if self.view:
            self.view.close()

    def write(self, content, replace_cursor_position=False):
        self.view.run_command('_php_grammar_test_view_replace', {'text': content})
        if replace_cursor_position:
            self.view.run_command('_php_grammar_test_view_replace_cursor')

    def content(self, replace_cursor_position=False):
        if replace_cursor_position:
            self.view.run_command('_php_grammar_test_view_replace_cursor', {'reverse': True})

        return view_to_str(self.view)

    def view_to_scope_name_repr(self):
        return view_to_scope_name_repr(self.view)

    def assertContent(self, expected, msg=None):
        self.assertEqual(self.content(), expected, msg)
