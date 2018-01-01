from sublime import load_settings
from sublime import Region
from sublime import save_settings
import sublime_plugin


def plugin_loaded():
    # Reenable native PHP package, because it was disabled in PHPGrammar v1.0.
    settings = load_settings('Preferences.sublime-settings')
    ignored_packages = settings.get('ignored_packages', [])
    if 'PHP' in ignored_packages:
        ignored_packages.remove('PHP')
        settings.set('ignored_packages', ignored_packages)
        save_settings('Preferences.sublime-settings')


def is_finish_completion_context(view):
    for s in view.sel():
        if view.substr(s.end()) != ')':
            return False

    return True


class PhpGrammarIsCompletionContext(sublime_plugin.EventListener):
    def on_query_context(self, view, key, operator, operand, match_all):
        if key == 'php_grammar_is_completion':
            if is_finish_completion_context(view):
                return True

        return None


class PhpGrammarCompleteCommand(sublime_plugin.TextCommand):
    def run(self, edit, action, **kwargs):

        if len(self.view.sel()) > 1:
            # TODO Support multiple selections
            raise Exception('multifile selections not implemented')

        if action == 'finish':
            """Delete selection, move forward one character, and insert text."""
            if not is_finish_completion_context(self.view):
                return

            for s in self.view.sel():
                self.view.erase(edit, s)

            self.view.run_command('move', {
                'by': 'characters',
                'forward': True
            })

            insert_characters = kwargs.get('insert_characters')
            if insert_characters is not None:
                self.view.run_command('insert', {
                    'characters': insert_characters
                })

        elif action == 'array-operator':
            pt = self.view.sel()[0].begin()
            if self.view.substr(pt + 1) in '\'"':
                self.view.sel().clear()
                self.view.sel().add(pt + 2)

            # TODO Remove pre-cursor whitespace

            # XXX What is a better way to do this?
            to_pt = pt
            while self.view.substr(to_pt) == ' ':
                to_pt = to_pt + 1
            if to_pt > pt:
                self.view.erase(edit, Region(pt, to_pt))

            self.view.insert(edit, pt, ' => ')
        else:
            raise Exception('unknown action')
