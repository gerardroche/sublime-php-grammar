# Contributing

**_Note_: The test suite only works in ST3**

## Overview

* [Running Tests](#running-tests)
* [Syntax Tests](#syntax-tests)
* [Language Tests](#language-tests)
* [Resources](#resources)

## Running Tests

Command Palette:

* `PHP Grammar: Run All Tests`
* `PHP Grammar: Run Syntax Tests`
* `PHP Grammar: Run Indentation Tests`

## Test Generators

Command Palette:

* `PHP Grammar: Generate Syntax Test Expectation`: If a syntax test file is in the current view the `--EXPECT--` part of the test is replaced with the expected `--FILE--` scope content.

## Syntax Tests

* All syntax tests are place in `test/syntax`
* All syntax test file names must end with `_test.php`

**Test File Fields:**

* `--TEST--` Description *(required)*
* `--FILE--` Actual text to test against *(required)*
* `--EXPECT--` Expected text *(required)*
* `--SYNTAX--` Defaults to `Packages/php-grammar/PHP.tmLanguage` *(optional)*

**Test File Example:**

`test/syntax/namespace_test.php`

```
--TEST--
Basic namespace
--SYNTAX--
Packages/php-grammar/PHP.tmLanguage
--FILE--
<?php

namespace Name;

?>
--EXPECT--
source.php source.php.embedded.block.html punctuation.section.embedded.begin.php
source.php source.php.embedded.block.html punctuation.section.embedded.begin.php
source.php source.php.embedded.block.html punctuation.section.embedded.begin.php
source.php source.php.embedded.block.html punctuation.section.embedded.begin.php
source.php source.php.embedded.block.html punctuation.section.embedded.begin.php
source.php source.php.embedded.block.html
source.php source.php.embedded.block.html
source.php source.php.embedded.block.html meta.namespace.php keyword.other.namespace.php
source.php source.php.embedded.block.html meta.namespace.php keyword.other.namespace.php
source.php source.php.embedded.block.html meta.namespace.php keyword.other.namespace.php
source.php source.php.embedded.block.html meta.namespace.php keyword.other.namespace.php
source.php source.php.embedded.block.html meta.namespace.php keyword.other.namespace.php
source.php source.php.embedded.block.html meta.namespace.php keyword.other.namespace.php
source.php source.php.embedded.block.html meta.namespace.php keyword.other.namespace.php
source.php source.php.embedded.block.html meta.namespace.php keyword.other.namespace.php
source.php source.php.embedded.block.html meta.namespace.php keyword.other.namespace.php
source.php source.php.embedded.block.html meta.namespace.php
source.php source.php.embedded.block.html meta.namespace.php entity.name.type.namespace.php
source.php source.php.embedded.block.html meta.namespace.php entity.name.type.namespace.php
source.php source.php.embedded.block.html meta.namespace.php entity.name.type.namespace.php
source.php source.php.embedded.block.html meta.namespace.php entity.name.type.namespace.php
source.php source.php.embedded.block.html punctuation.terminator.expression.php
source.php source.php.embedded.block.html
source.php source.php.embedded.block.html
source.php source.php.embedded.block.html punctuation.section.embedded.end.php source.php
source.php source.php.embedded.block.html punctuation.section.embedded.end.php
```

### Testing the scope of specific points

| Assertion | Description |
|-----------|-------------|
| `equal:[line]:[offset]:[selector]` | Exact match select by line and offset |
| `match:[line]:[offset]:[selector]` | Match score greater than zero by line and offset |

##### `test/syntax/basic_support_function_test.php`

```
--TEST--
Basic function support
--FILE--
<?php

array_map();
str_shuffle();
\str_shuffle();

?>
--EXPECT--
equal:2:0:source.php source.php.embedded.block.html support.function.array.php
match:2:0:source.php support.function
match:2:0:support.function
match:3:0:source.php support.function.string.php
match:4:0:source.php punctuation.separator.inheritance.php
match:4:1:source.php support.function.string.php
```

## Indentation Tests

There are two options for writing indentation tests.

### Test and expectation in a single file

##### `test/indentation/if_else_test.php`

```
--TEST--
Basic if statement
--FILE--
<?php
echo 'statement 1';
if (true) {
echo 'statement 2';
echo 'statement 3';
if (false) {
echo 'statement 4';
echo 'statement 5';
} else {
echo 'statement 6';
echo 'statement 7';
}
echo 'statement 8';
echo 'statement 9';
}
echo 'statement 10';
?>
--EXPECT--
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
echo 'Statement 10';
?>
```

### Test and expectation in separate files

##### `test/indentation/if_else_test.php`

```
<?php
echo 'statement 1';
if (true) {
echo 'statement 2';
echo 'statement 3';
if (false) {
echo 'statement 4';
echo 'statement 5';
} else {
echo 'statement 6';
echo 'statement 7';
}
echo 'statement 8';
echo 'statement 9';
}
echo 'statement 10';
```

##### `test/indentation/if_else_expect.php`

```
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
echo 'Statement 10';
```

## Resources

* [PHP Language Specifications][php-langspec]
* [PHP Documentation][php-docs]

[php-docs]: http://php.net/docs.php
[php-langspec]: https://github.com/php/php-langspec
