import sublime
import sublime_plugin


def plugin_loaded():
    settings = sublime.load_settings('Preferences.sublime-settings')
    ignored_packages = settings.get('ignored_packages', [])

    # Disable the default PHP package
    if 'PHP' not in ignored_packages:
        # fixes #45 "error loading syntax" on install
        for window in sublime.windows():
            for view in window.views():
                if view.settings().get('syntax').find('Packages/PHP/') != -1:
                    if int(sublime.version()) >= 3092:
                        view.settings().set('syntax', 'Packages/php-grammar/PHP.sublime-syntax')
                    else:
                        view.settings().set('syntax', 'Packages/php-grammar/PHP.tmLanguage')

                if view.settings().get('syntax').find('Packages/HTML/') != -1:
                    file_name = view.file_name()
                    if file_name:
                        if file_name.endswith('.phtml'):
                            if int(sublime.version()) >= 3092:
                                view.settings().set('syntax', 'Packages/php-grammar/PHP.sublime-syntax')
                            else:
                                view.settings().set('syntax', 'Packages/php-grammar/PHP.tmLanguage')
                        else:
                            # In builds < 3092 setting the HTML syntax causes "error loading PHP syntax" errors
                            if int(sublime.version()) >= 3092:
                                view.settings().set('syntax', 'Packages/HTML/HTML.sublime-syntax')
                            else:
                                view.settings().set('syntax', 'Packages/Text/Plain text.tmLanguage')

        ignored_packages.append('PHP')
        ignored_packages.sort()

        settings.set('ignored_packages', ignored_packages)
        sublime.save_settings('Preferences.sublime-settings')


def plugin_unloaded():
    settings = sublime.load_settings('Preferences.sublime-settings')
    ignored_packages = settings.get('ignored_packages', [])

    # Reenable the default PHP package
    if 'PHP' in ignored_packages:
        ignored_packages.remove('PHP')
        ignored_packages.sort()

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
