import sublime
import sublime_plugin
import unittest
import os
import glob
import re

DEBUG = True

def debug_msg(msg):
    if DEBUG:
        print('[PHP Language Grammar] [Indentation Test] %s' % (msg))

def error_msg(msg):
    # @todo should this prompt person?
    debug_msg("[ERROR] " + msg)

class IndentationTestView:

    def __init__(self):
        self.view = sublime.active_window().new_file()
        self.view.set_scratch(True)

        packageName = os.path.basename(os.path.dirname(__file__))

        self.view.set_syntax_file('Packages/' + packageName + '/PHP.tmLanguage')
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

    def toStr(self):
        return self.view.substr(sublime.Region(0, self.view.size()))

    def close(self):
        self.view.window().run_command('close'),

class TestIndentation(unittest.TestCase):

    def getFile(self, name, ext):
        return self.readFile(os.path.join(
            __class__.getTestIndentationPath(),
            name + '.' + ext
        ))

    def readFile(self, filename):
        with open(filename) as f:
            return f.read()

    def getTestIndentationPath():
        return os.path.join(__class__.getTestPath(), 'indentation')

    def getTestPath():
        return os.path.join(os.path.dirname(__file__), 'test')

    def getTestFile(self, name):
        return self.getFile(name, __class__.getTestFileExt())

    def getTestFileExt():
        return 'test.php';

    def getExpectedFile(self, name):
        return self.getFile(name, __class__.getExpectedFileExt())

    def getExpectedFileExt():
        return 'expect.php';

    def isValidTestName(name):
        return re.search('^[a-z][a-z0-9_]*$', name);

    def setUp(self):
        self.maxDiff = None
        self.view = IndentationTestView()

    def tearDown(self):
        self.view.close()

    def initDataProviders():
        indentationTests = []
        for testFile in glob.glob(__class__.getTestIndentationPath() + '/*.' + __class__.getTestFileExt()):
            name = os.path.basename(testFile).rpartition('.' + __class__.getTestFileExt())[0]
            if __class__.isValidTestName(name):
                indentationTests.append(name)
            else:
                error_msg('Invalid indentation file name: %s' % name)

        for name in indentationTests:
            setattr(__class__, 'test_%s' % name, __class__.createIndentationTest(name))

    def createIndentationTest(name):
        def indentationTest(self):
            self.view.insert(self.getTestFile(name))
            self.view.reindent()
            self.assertEqual(self.getExpectedFile(name), self.view.toStr())
        return indentationTest

class PhpGrammarIndentationTests(sublime_plugin.WindowCommand):

    def run(self):
        debug_msg('')
        debug_msg('*** PHP Grammar Indentation Tests ***')
        debug_msg('')

        self.window.run_command('show_panel', {'panel': 'console'})

        TestIndentation.initDataProviders()

        unittest.TextTestRunner(verbosity=2).run(
            unittest.TestLoader().loadTestsFromTestCase(TestIndentation)
        )
