# Contributing

## Overview

* [Running Tests](#running-tests)
* [Indentation Tests](#indentation-tests)
* [Language Tests](#language-tests)
* [Resources](#resources)

## Running Tests

_Note_: Currently the tests can only be run in Sublime Text 3.

### Key Bindings

_Note_: Test runner key bindings are disabled by default. To enable them set `"php-grammar.development_mode": true` in preferences: `Menu > Preferences > Settings - User`

| OS X / Windows / Linux | Descriptions |
|------------------------|--------------|
| <kbd>Ctrl</kbd>+<kbd>k</kbd>, <kbd>Ctrl</kbd>+<kbd>i</kbd> | Run indentation tests |
| <kbd>Ctrl</kbd>+<kbd>k</kbd>, <kbd>Ctrl</kbd>+<kbd>l</kbd> | Run language tests |

## Indentation Tests

Two files are required for an indentation test.

1. `test/indentation/name_test.php`
2. `test/indentation/name_test_expect.php`

The contents of `name_test.php` file is loaded, reindented, and compared to the contents of `name_test_expect.php`. If they match the test passes, if not the test fails.

### Example

##### `test/indentation/if_else_test.php`

```
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

## Language Tests

| Assertion | Description |
|-----------|-------------|
| `equal:[line]:[offset]:[selector]` | Exact match select by line and offset |
| `match:[line]:[offset]:[selector]` | Match score greater than zero by line and offset |

### Example 1 - Test exact scope of file

##### `test/language/namespace_test.php`

```
--TEST--
Basic namespace
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

### Example 2 - Test points in file with assertions

##### `test/language/basic_support_function_test.php`

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

## Resources

* [PHP Language Specifications][php-langspec]
* [PHP Documentation][php-docs]

[php-docs]: http://php.net/docs.php
[php-langspec]: https://github.com/php/php-langspec
