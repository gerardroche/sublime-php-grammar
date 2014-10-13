Contributing
============

Contributions are always welcome.

Pull requests for bug fixes should be based on the current stable branch master
whereas pull requests for new features should be based on the develop.

At the moment most work is done on the develop branch, so please look there
first.

Running the tests
-----------------

**The test suite will currently only work on Sublime Text 3.**

Ctrl+k Ctrl+t will run all the tests.

Indentation rules
-----------------

### Write tests

Two files are required for a test: a `.test.php` file, and an `.expect.php`
file.

When the test suite is run, the contents of the `.test.php` file is loaded,
reindented, and the result is then compared to the exact contents of the
`.expect.php` file.

Test files are placed in the `test/indentation` directory.

**Naming test files**

Test files must be underscored, lowercased, and begin with a character in the
character class `[a-z]`.

    [a-z][a-z0-9_]*.test.php
    [a-z][a-z0-9_]*.expect.php

Bug fixes that relate to an issue in the issue tracker should be prefixed with
`bugfix{{id}}_`.

**Example**


*Note: the reason we start with at least one level of indentation is to try and
avoid false-positives i.e. if we were not to do this then we would not see
where indentation is decreased.*

`test/indentation/if.test.php`

    <?php

    function start_with_at_least_one_indent() {

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

    }

    var_dump('begin...');
    start_with_at_least_one_indent();
    var_dump('done.');


`test/indentation/if.expect.php`

    <?php

    function start_with_at_least_one_indent() {

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

    }

    var_dump('begin...');
    start_with_at_least_one_indent();
    var_dump('done.');


Resources
---------

- [PHP Language Specifications](https://github.com/php/php-langspec)
- [PHP Documentation](https://github.com/php/php-langspec)
