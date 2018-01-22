import glob
import os
import re

from PHPGrammar.tests import unittest


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


class TestIndentation(unittest.ViewTestCase):

    def test_all(self):
        test_files = glob.glob(os.path.join(os.path.dirname(__file__), 'indentation') + '/*_test.php')
        for test_file_name in test_files:
            test_file = TestFile.from_file(test_file_name)
            self.write(test_file.actual_content)

            self.view.run_command('reindent', {'force_indent': True, 'single_line': False})

            self.assertContent(test_file.expected_content, "failed at test file:" + test_file_name)
