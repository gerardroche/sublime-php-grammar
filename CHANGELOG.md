# sublime-php-grammar changelog

## 0.10.0

* Fixed: Closing php tag `?>` no longer contains `source.php` scope
* Fixed: Test suite was not running all syntax tests

## 0.9.0

* Added: As of ST build 3092 the root PHP scope is `embedding.php text.html.basic` and all `source.php.embedded.*.html` scopes are now `meta.embedded.*.php`. This should not impact the majority of packages that have a dependecy on php scopes.

    ```
    Previously

    source.php source.php.embedded.block.html meta.namespace.php keyword.other.namespace.php

    As of 3092

    embedding.php text.html.basic meta.embedded.block.php source.php meta.namespace.php keyword.other.namespace.php
    ```

* Added: Update builtin classes, support constants and support functions to PHP 5.6.9
* Added: String escape sequences `\e`, `\f`, and `\v`
* Added: PHP syntax is now applied to unknown filetypes that begin with `<?php ` *(`>= 3092` only)*
* Fixed: Array type hints are now case-insensitive

## 0.8.0

* Added `PHP.sublime-syntax` for newer versions of ST3 (>= 3092). See http://www.sublimetext.com/forum/viewtopic.php?f=2&t=18634&start=0

## 0.7.0

* Added: `PHP Grammar: Run All Tests` to command palette
* Added: `PHP Grammar: Run Syntax Tests` to command palette
* Added: `PHP Grammar: Run Indentations Tests` to command palette

## 0.6.0

* All PHPDoc and other arbitrary docblock annotations are now matched and highlighted correctly
* <kbd>Ctrl</kbd>+<kbd>Enter</kbd> "append `;\n`" macro now works in PHP 5.4 array syntax e.g. `[]`
* Short array syntax scope is now similar to function construct array scope e.g. `array(/*...*/)` and `[/*...*/]` #6
* All macros are now limited to PHP scopes
* New macro: <kbd>Enter</kbd> appends `,\n` in array strings.
* New macro: <kbd>Ctrl</kbd>+<kbd>Enter</kbd> appends `;\n` *in valid contexts*
* New macro: <kbd>Ctrl</kbd>+<kbd>;</kbd> appends `;` *in valid contexts*
* New macro: To insert a literal newline key <kbd>Shift</kbd>+<kbd>Enter</kbd>
* Minimised auto-complete noise. Completion rules now cancel completions for method declarations and class declarations with modifiers. e.g. typing at `public function |` and `abstract class |`.
* Empty short array syntax arrays are now scoped similar to empty function construct arrays e.g. both `array()` and `[]` now scoped with `meta.array.empty.php`
* Testing: Added a language test suite. Closes #2
* Testing: Added a indentation test and expectation in a single file test case
* Testing: Test command key bindings are now disabled by default. They can be enabled by setting `"php-grammar.development_mode": true` in the preferences: `Menu > Preferences > Settings User`.
* Testing: Key binding to run indentation tests is now <kbd>Ctrl</kbd>+<kbd>k</kbd> <kbd>Ctrl</kbd>+<kbd>i</kbd>

## 0.5.0

* Fixed: `__toString` magic method was not being highlighted by syntax highlighters properly.
* Added: PHP 5.6 `__debugInfo` magic method

## 0.4.0

* Fixed: SublimeTextIssues/DefaultPackages#17 Typehinted short array arg syntax
* Added: PHP 5.5 `finally` keyword
* Added: PHP 5.5 `yield` keyword
* Added: PHP 5.4. `trait` support
* Added: support for PHP 5.4 `__TRAIT__` magic constant
* Renamed indentation test file names. File names are now *underscored* rather than dot separated e.g. `name.test.php`, `name.expect.php` are now `name_test.php`, `name_test_expect.php`. See [CONTRIBUTING.md](CONTRIBUTING.md) for more details.
* The native PHP package is now automatically disabled. _Note_: Sublime text has a native package for PHP. However, when php-grammar is enabled, the native package causes some conflicts. For this reason, php-grammar will automatically disable it. Since it doesn't bring anything new over php-grammar, this is not a loss. But remember, when you disable php-grammar, you have to reenable the native PHP package manually (if you want).

## 0.3.0

* Completions no longer cancel at `else`, `do`, or `try`
* Completions no longer cancel when typing at words `class|`, `function|`, *however*, if there is a space following them they are considered keywords and then completions are cancelled i.e. `classa` no longer cancels completions, but `class a` does.
* Completions now cancel when typing at `interface |` and `trait |`

## 0.2.0

* Fixed: Herdoc and Nowdoc now preserves indentation
* Fixed: `[control_structure] (expr) :` now increasees indentation rather than just indenting the next line
* Fixed: `<?php [control_structure] (expr) : ?>` now increases indentation rather than just indenting the next line
* Fixed: `for (expr) { /* ... */ }` on the same line does not increase indentation
* Fixed: `declare (expr) :` now increasees indentation
* Multiline arrays are now indent properly
* A new macro for newline on enter between array parens e.g. press enter where the cursor is `|`

    ```php
    $variable = array(|)
    ------------------------------------------
    Previously             New
    ------------------------------------------
    $variable = array(    | $variable = array(
        |)                |     |
                          | )
    ```

* Added: An indentation test suite
* Functions in symbols list are indented with two spaces
* Performance: Support regexes are now atomic
* Updated: Builtin class, constant, and function support regexes to PHP 5.5.9
  Not all support regexes were updated.
  The update was done using php reflection whereas the Textmate php bundle, for example, uses the php documentation to extract support information to build the regexes. See https://github.com/textmate/php.tmbundle/blob/d24593d75c3c5f01b4b0705a9e6db132c0cfd55b/Support/generate/generate.php
  The php reflection extension names don't match how they are documented e.g. all the string functions are in the reflection extension named "standard" which includes other functions, whereas in the docs all the string functions are group named the "string" extension.

## 0.1.0

* Initial import of PHP language grammar from Sublime Text 3 build 3065
