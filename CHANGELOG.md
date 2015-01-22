# php-grammar changelog

## 0.5.0

## Bug Fixes

* `__toString` magic method was not being highlighted by syntax highlighters properly.

### New Features

* Add PHP 5.6 `__debugInfo` magic method

## 0.4.0

### Bug Fixes

* SublimeTextIssues/DefaultPackages#17 Typehinted short array arg syntax

### New Features

* Add PHP 5.5 `finally` keyword
* Add PHP 5.5 `yield` keyword
* Add PHP 5.4. `trait` support
* Add support for PHP 5.4 `__TRAIT__` magic constant

### Changes

* Renamed indentation test file names. File names are now *underscored* rather than dot separated e.g. `name.test.php`, `name.expect.php` are now `name_test.php`, `name_test_expect.php`. See [CONTRIBUTING.md](CONTRIBUTING.md) for more details.
* The native PHP package is now automatically disabled. _Note_: Sublime text has a native package for PHP. However, when php-grammar is enabled, the native package causes some conflicts. For this reason, php-grammar will automatically disable it. Since it doesn't bring anything new over php-grammar, this is not a loss. But remember, when you disable php-grammar, you have to reenable the native PHP package manually (if you want).

## 0.3.0

### Bug Fixes

* Completions no longer cancel at `else`, `do`, or `try`
* Completions no longer cancel when typing at words `class|`, `function|`, *however*, if there is a space following them they are considered keywords and then completions are cancelled i.e. `classa` no longer cancels completions, but `class a` does.

### New Features

* Completions now cancel when typing at `interface |` and `trait |`

## 0.2.0

### Bug Fixes

* Fixed: Herdoc and Nowdoc now preserves indentation
* Fixed: `[control_structure] (expr) :` now increasees indentation rather than just indenting the next line
* Fixed: `<?php [control_structure] (expr) : ?>` now increases indentation rather than just indenting the next line
* Fixed: `for (expr) { /* ... */ }` on the same line does not increase indentation
* Fixed: `declare (expr) :` now increasees indentation

### New Features

* Multiline arrays are now indent properly
* A new macro for newline on enter between array parens e.g. press enter where the cursor is `|`

    ```php
    $variable = array(|)
    ```

    Old functionaility

    ```php
    $variable = array(
        |)
    ```

    New functionaility

    ```php
    $variable = array(
        |
    )
    ```

* Added: An indentation test suite
* Functions in symbols list are indented with two spaces
* Updated: Builtin class, constant, and function support regexes to PHP 5.5.9

  Not all support regexes were updated.

  The update was done using php reflection whereas the Textmate php
  bundle, for example, uses the php documentation to extract support information
  to build the regexes.

  See https://github.com/textmate/php.tmbundle/blob/d24593d75c3c5f01b4b0705a9e6db132c0cfd55b/Support/generate/generate.php

  The php reflection extension names don't match how they are documented e.g.
  all the string functions are in the reflection extension named "standard"
  which includes other functions, whereas in the docs all the string functions
  are group named the "string" extension.
  
* Performance: Support regexes are now atomic

## 0.1.0

* Initial import of PHP language grammar from Sublime Text 3 build 3065
