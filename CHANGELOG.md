# gerardroche/sublime-php-grammar changelog

Works best with [PHP Completions], [PHP Snippets], and [PHPUnit].

**Many improvements and bug fixes apply only to Sublime Text build >= 3095.**

## 0.19.0

* Added: #82 Support for new PHP 7 constants
* Added: #82 Support for new PHP 7 functions
* Added: #82, #78 Support for new PHP 7 classes
* Added: Support for XDebug functions
* Added: Support for other missing constants, functions, and classes
* Added: #74 Support for PHP 7 unicode codepoint escape syntax
* Added: #64 Support for PHP 7 null coalescing operator
* Added: #69 Support for PHP 7 spaceship operator
* Added: #68 Support for PHP 5.6 exponentiation operator
* Added: phps to list of suppoerted file extensions
* Added: binary number support
* Added: syntax is now compatible with new syntax regex
* Added: support for the J regex modifier
* Added: #66 Support PHP 5.6 variadic functions via ...
* Fixed: several issues with sublime text build >= 3114
* Removed: #82 Support for Extensions and SAPIs removed in PHP 7
* Removed: support for the e regex modifier was REMOVED as of PHP 7

## 0.18.0

* Added: punctuation.definition.(end|begin).php scope to parens
* Added: constant.character.format-argument scope for sprintf %s arguments in strings
* Added: macro to finish completion by pressing backspace, ), or ;
* Added: highlight sql CTE queries (starting with `WITH`) @mathroc [#88](https://github.com/gerardroche/sublime-php-grammar/pull/88)
* Added: support for characters between x7F-xFF in namespace identifiers. @borela [#89](https://github.com/gerardroche/sublime-php-grammar/pull/89)
* Changed: Symbol list prefixes now use colons rather than parents e.g. f:, c: vs (f), (c). This makes it easier to refine symbol searches.
* Removed: ambiguous filetypes like install, profile, etc

## 0.17.0

* Added: #57 punctuation scope for braces
* Added: #59 extended echo and print scope: support.function.construct.output
* Added: extended boolean scope to constant.language.boolean
* Added: extended magic constant scope to constant.language.magic
* Added: extended null constant scope to "constant.language.null"
* Added: punctuation definition scope to the parens of type casts
* Fixed: #56 indentation for empty brackets
* Fixed: #58 syntax bracket handling for closures
* Fixed: #61, #62, and #63 operator scopes not matching correctly
* Fixed: syntax test suite broken by build 3096

## 0.16.0

* Added: Indicators to the symbols list (Ctrl+R). Namespaces, Classes, Function and Traits are now prefixed with (N), (C), (F), and (T).
* Added: syntax support for "use function" and "use const"
* Added: Namespace aliases are now indexed symbols. This adds support for the "Goto definition..." command.

## 0.15.1

* Added: [#45](https://github.com/gerardroche/sublime-php-grammar/issues/45) "error loading syntax file" dialog on install

## 0.15.0

* Added: [#35](https://github.com/gerardroche/sublime-php-grammar/issues/35) support for .php_cs filetypes
* Added: [#4](https://github.com/gerardroche/sublime-php-grammar/issues/4) newline and indent on enter macro for function parens e.g. func(|), new cls(|)
* Added: [#41](https://github.com/gerardroche/sublime-php-grammar/issues/41) and [#42](https://github.com/gerardroche/sublime-php-grammar/issues/42) smart tab complete " => "
* Added: [#46](https://github.com/gerardroche/sublime-php-grammar/issues/46) Package Settings Menu with README, CHANGELOG, and LICENSE links
* Fixed: [#36](https://github.com/gerardroche/sublime-php-grammar/issues/36) leading whitespace removed from keyword scopes
* Fixed: [#38](https://github.com/gerardroche/sublime-php-grammar/issues/38) strings like "SELECT", "DELETE" no longer match as sql
* Fixed: [#4](https://github.com/gerardroche/sublime-php-grammar/issues/4) function parens are no longer deindent on next line
* Fixed: [#40](https://github.com/gerardroche/sublime-php-grammar/issues/40) one line control statement indentation rules
* Fixed: [#17](https://github.com/gerardroche/sublime-php-grammar/issues/17) PSR-2 method argument indentation rules
* Fixed: [#19](https://github.com/gerardroche/sublime-php-grammar/issues/19) PSR-2 closure indentation rules

## 0.14.0

* Added to Package Control #1
* Added "ctrl+enter" auto pair braces support for control structures, language constructs, functions, and methods #23
* Updated all latest changes from native PHP package
* Changed "enter" append comma and newline in array strings to "ctrl+enter" #25
* ST2 is no longer actively supported
* Fixed typo bug in "ctrl+;" macro regex
* Fixed "ctrl+enter" macro now triggers inside strings
* Fixed #31 only last inherited interface gets highlighted
* Fixed #29 final class storage modifier scope
* Fixed #12 multiline function arguments scope

## 0.13.0

* Fixed: Third-party syntaxes, "source.php" scope not working #21

## 0.12.0

* Add `{@see *}` inline phpdoc keyword
* Invalid PHPDoc tags, tags that don't start with an asterisk followed by only whitespace, are no longer matched as phpdoc keywords e.g. `* foo @tag`

## 0.11.0

* Email addresses `name@example.com`, placeholders `@foo@` and other non phpdoc tags are no longer matched as phpdoc tags. #11, #14
* Add "example", "inheritdoc", and "internal" inline phpdoc keywords #11, #13
* Add support for `php7`, `inc`, `module`, `profile`, and `install` extensions
* Fix typo in scope: s/repitition/repetition

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

[PHP Grammar]: https://packagecontrol.io/packages/php-grammar
[PHP Completions]: https://packagecontrol.io/packages/PHP%20Completions%20Kit
[PHP Snippets]: https://packagecontrol.io/packages/php-snippets
[PHPUnit]: https://github.com/gerardroche/sublime-phpunit
[PHPUnit Completions]: https://github.com/gerardroche/sublime-phpunit-completions
[PHPUnit Snippets]: https://github.com/gerardroche/sublime-phpunit-snippets
