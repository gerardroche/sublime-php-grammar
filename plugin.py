import sublime
import sublime_plugin


def plugin_loaded():
    settings = sublime.load_settings('Preferences.sublime-settings')
    ignored_packages = settings.get('ignored_packages', [])
    if 'PHP' in ignored_packages:
        ignored_packages.remove('PHP')
        settings.set('ignored_packages', ignored_packages)
        sublime.save_settings('Preferences.sublime-settings')


def is_finish_completion_context(view):
    for s in view.sel():
        if view.substr(s.end()) != ')':
            return False

    return True


class FinishCompletionContext(sublime_plugin.EventListener):
    def on_query_context(self, view, key, operator, operand, match_all):
        if key == 'finish_completion':
            if is_finish_completion_context(view):
                return True

        return None


class FinishCompletionCommand(sublime_plugin.TextCommand):
    """Delete selection, move forward one character, and insert text."""

    def run(self, edit, insert_characters=None):
        if not is_finish_completion_context(self.view):
            return

        for s in self.view.sel():
            self.view.erase(edit, s)

        self.view.run_command('move', {
            'by': 'characters',
            'forward': True
        })

        if insert_characters is not None:
            self.view.run_command('insert', {
                'characters': insert_characters
            })
