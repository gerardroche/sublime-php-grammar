from sublime import Region
import sublime_plugin


def is_finish_completion_context(view) -> bool:
    for s in view.sel():
        if view.substr(s.end()) != ')':
            return False

    return True


class PhpGrammarIsCompletionContext(sublime_plugin.EventListener):
    def on_query_context(self, view, key, operator, operand, match_all):
        if key == 'php_grammar_is_completion':
            return is_finish_completion_context(view)


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
