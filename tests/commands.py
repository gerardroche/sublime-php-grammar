from sublime import Region
from sublime_plugin import TextCommand


class php_grammar_test_view_replace(TextCommand):
    def run(self, edit, text):
        self.view.replace(edit, Region(0, self.view.size()), text)


class php_grammar_test_view_replace_cursor(TextCommand):
    def run(self, edit, reverse=False):
        if reverse:
            cursor_position = self.view.sel()[0]
            self.view.replace(edit, cursor_position, '|')
        else:
            cursor_placeholder = self.view.find('\\|', 0)

            if not cursor_placeholder or cursor_placeholder.empty():
                return

            self.view.sel().clear()
            self.view.sel().add(cursor_placeholder.begin())
            self.view.replace(edit, cursor_placeholder, '')
