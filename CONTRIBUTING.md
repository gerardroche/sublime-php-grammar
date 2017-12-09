# Contributing

**Sublime Text <= 3095 is no longer supported.**

## Resources

* [PHP Language Specifications](https://github.com/php/php-langspec)
* [PHP Documentation](http://php.net/docs.php)

## Running Tests

The [UnitTesting](https://github.com/randy3k/UnitTesting) package is used to run the tests. Install it, open the Command Palette, type "UnitTesting", press Enter and input "php-grammar" as the package to test.

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
