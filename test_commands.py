import sublime_plugin
import sublime


class _php_grammar_test_view_replace(sublime_plugin.TextCommand):
    def run(self, edit, text):
        self.view.replace(edit, sublime.Region(0, self.view.size()), text)


class _php_grammar_test_view_replace_cursor(sublime_plugin.TextCommand):
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
