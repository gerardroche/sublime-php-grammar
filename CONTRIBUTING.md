# Contributing

**Sublime Text <= 3095 is no longer supported.**

## Overview

* [Resources](#resources)
* [Running Tests](#running-tests)
* [Syntax Tests](#syntax-tests)
* [Indentation Tests](#indentation-tests)

## Resources

* [PHP Language Specifications](https://github.com/php/php-langspec)
* [PHP Documentation](http://php.net/docs.php)

## Running Tests

Tests can be run from the command palette.

* `PHP Grammar: Run All Tests`
* `PHP Grammar: Run Syntax Tests`
* `PHP Grammar: Run Indentation Tests`

## Syntax Tests

All syntax tests should be placed in the `tests/syntax/` folder. Please refer to the Sublime Text [documentation](http://www.sublimetext.com/docs/3/syntax.html) on how to write syntax tests.

## Indentation Tests

There are two options for writing indentation tests.

* Test & expected indentation in a single file
* Test & expected indentation in separate files

### Test and expected indentation in a single file

`tests/indentation/if_else_test.php`

```
--TEST--
If statement
--FILE--
<?php
echo 'one';
if ($two) {
if ($three) {
echo 'four';
}
echo 'five';
?>
--EXPECT--
<?php
echo 'one';
if ($two) {
    if ($three) {
        echo 'four';
    }
}
echo 'five';
?>
```

### Test and expected indentation in separate files

`tests/indentation/if_else_test.php`

```
<?php
echo 'one';
if ($two) {
if ($three) {
echo 'four';
}
echo 'five';
?>
```

`tests/indentation/if_else_expect.php`

```
<?php
echo 'one';
if ($two) {
    if ($three) {
        echo 'four';
    }
}
echo 'five';
?>
```
