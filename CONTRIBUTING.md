# Contributing

## Overview

* [Where to begin](#where-to-begin)
* [Resources](#resources)
* [Running Tests](#running-tests)
* [Indentation Tests](#indentation-tests)

## Where to begin

Pull requests for bug fixes should be based on the current stable branch master
whereas pull requests for new features should be based on the develop.

## Resources

* [PHP Language Specifications][php-langspec]
* [PHP Documentation][php-docs]

## Running Tests

_Note_: Currently the tests can only be run in Sublime Text 3.

### Key Bindings

| OS X / Windows / Linux | Descriptions |
|------------------------|--------------|
| <kbd>Ctrl</kbd>+<kbd>k</kbd>, <kbd>Ctrl</kbd>+<kbd>t</kbd> | Run all tests |

## Indentation Tests

Two files are required for an indentation test.

1. `test/indentation/name_test.php`
2. `test/indentation/name_test_expect.php`

The test suite will load the contents of the `name_test.php` file, reindent it, and compare the results with the contents of `name_test_expect.php`. If they match the test passes, if not it fails.

### Example

`test/indentation/if-else.test.php`

    <?php
    echo 'Statement 1';
    if (true) {
    echo 'Statement 2';
    echo 'Statement 3';
    if (false) {
    echo 'Statement 4';
    echo 'Statement 5';
    } else {
    echo 'Statement 6';
    echo 'Statement 7';
    }
    echo 'Statement 8';
    echo 'Statement 9';
    }
    var_dump('.');

`test/indentation/if-else.expect.php`

    echo 'Statement 1';
    if (true) {
        echo 'Statement 2';
        echo 'Statement 3';
        if (false) {
            echo 'Statement 4';
            echo 'Statement 5';
        } else {
            echo 'Statement 6';
            echo 'Statement 7';
        }
        echo 'Statement 8';
        echo 'Statement 9';
    }
    var_dump('.');

[php-docs]: http://php.net/docs.php
[php-langspec]: https://github.com/php/php-langspec
