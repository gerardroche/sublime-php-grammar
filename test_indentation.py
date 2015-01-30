import sublime
import sublime_plugin
import unittest
import os
import glob
import re

DEBUG_MODE=bool(os.getenv('SUBLIME_PHP_GRAMMAR_DEBUG'))

if DEBUG_MODE:
    def debug_message(message):
        print('[php-grammar] [test_indentation] %s' % str(message))
else:
    def debug_message(message):
        pass

class Config():
    def __init__(self):
        self.package_root_path = os.path.dirname(__file__)
        self.package_name = os.path.basename(self.package_root_path)
        self.tests_path = os.path.join(self.package_root_path, 'test')
        self.indentation_tests_path = os.path.join(self.tests_path, 'indentation')
        self.indentation_test_file_extension = '_test.php'
        self.indentation_test_expect_file_extension = '_test_expect.php'
        self.php_language_file = os.path.join('Packages', self.package_name, 'PHP.tmLanguage')

config = Config()

class IndentationTestView():

    def __init__(self):
        self.view = sublime.active_window().new_file()
        self.view.set_scratch(True)
        self.view.set_syntax_file(config.php_language_file)

        self.view.settings().set('auto_indent', False)
        self.view.settings().set('smart_indent', True)
        self.view.settings().set('indent_to_bracket', False)
        self.view.settings().set('draw_white_space', 'all')
        self.view.settings().set('tab_size', 4)
        self.view.settings().set('trim_automatic_white_space', True)

    def insert(self, string):
        self.view.run_command('insert', {'characters': string})
        self.view.run_command('move_to', {'to': 'bof'})

    def reindent(self):
        self.view.run_command('reindent', {
            'force_indent': True,
            'single_line': False
        })
        self.view.run_command('move_to', {'to': 'bof'})

    def to_str(self):
        return self.view.substr(sublime.Region(0, self.view.size()))

    def close(self):
        self.view.window().run_command('close'),

class TestIndentation(unittest.TestCase):

    def setUp(self):
        self.view = IndentationTestView()
        self.maxDiff = None

    def tearDown(self):
        self.view.close()

    def getFileContents(self, name, ext):
        file_name = os.path.join(config.indentation_tests_path, name + ext)
        with open(file_name) as f:
            return f.read()

    def createFileDataProiderTest(name):
        def indentationTest(self):
            self.view.insert(self.getFileContents(name, config.indentation_test_file_extension))
            self.view.reindent()
            self.assertEqual(self.getFileContents(name, config.indentation_test_expect_file_extension), self.view.to_str())
        return indentationTest

class PhpGrammarTestIndentation(sublime_plugin.WindowCommand):

    def run(self):
        debug_message('command: php_grammar_test_indentation')

        self.window.run_command('show_panel', {'panel': 'console'})

        # Setup data providers
        for test_file_name in glob.glob(config.indentation_tests_path + '/*' + config.indentation_test_file_extension):
            name = os.path.basename(test_file_name).rpartition(config.indentation_test_file_extension)[0]
            if re.search('^[a-z][a-z0-9_]*[a-z0-9]$', name):
                setattr(TestIndentation, 'test_file_data_provider_%s' % name, TestIndentation.createFileDataProiderTest(name))
            else:
                raise RuntimeError('Invalid indentation test file name: %s' % name)

        unittest.TextTestRunner(verbosity=2).run(
            unittest.TestLoader().loadTestsFromTestCase(TestIndentation)
        )

        self.window.focus_group(self.window.active_group())
