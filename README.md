# sublime-php-grammar

sublime-php-grammar plugin for Sublime Text. Provides a PHP syntax definition, decent indentation rules, macros, and other useful features.

**Sublime Text 3 only**

## Overview

* [Features](#features)
* [Macros](#macros)
* [Installation](#installation)
* [Contributing](#contributing)
* [Changelog](#changelog)
* [Complementary Plugins](#complementary-plugins)
* [Credits](#credits)
* [License](#license)

## Features

* Syntax definition support for PHP [~5.6](http://semver.org). *Provides more up to date support for syntax highlighters.*
* Decent macros
* Decent indentation rules

    Reindent.

    ```
    Menu > Edit > Line > Reindent
    ---------------------------------------------------------------------
    Original                  -> | Reindented
    ---------------------------------------------------------------------
    $val = array(                | $val = array(
    array(                       |     array(
    array(                       |         array(
    array(                       |             array(
    array(                       |                 array(
    array(                       |                     array(
    )                            |                     )
    )                            |                 )
    )                            |             )
    )                            |         )
    ),                           |     ),
    'x' => 'y',                  |     'x' => 'y',
    "multi" => array(            |         "multi" => array(
    "dimensional" => array(      |             "dimensional" => array(
    "array" => "x"               |                 "array" => "x"
    'x' => array(                |                 'x' => array(
    'y' => 'z'                   |                     'y' => 'z'
    )                            |                 )
    )                            |             )
    )                            |     )
    );                           | );
    ```

    Press closing parentheses in an array context automatically indents to the correct position.

    ```
    Press )
    ---------------------------------------------------------------------
    $val = array(               | $val = array(
        array(                  |     array(
            array(              |         array(
                array(          |             array(
                    |           |             )|
    ```

## Macros

*To insert a literal newline <kbd>Shift</kbd>+<kbd>Enter</kbd>.*

*To insert any other literal prefix it with <kbd>Ctrl</kbd>.*

<kbd>Enter</kbd>

```
array(|)                    | array(
                            |     |
                            | )
```

```
function_call(|)            | function_call(
                            |     |
                            | )
```

```
new class_name(|)           | new class_name(
                            |     |
                            | )
```

<kbd>Ctrl</kbd>+<kbd>Enter</kbd>

```
array(                      | array(
    'str|'                  |     'str',
)                           |     |
                            | )
```

```
'str|ing'                   | 'string';
                            | |
```

```
function_call(|)            | function_call();
                            | |
```

```
if ($condition|)            | if ($condition) {
                            |     |
                            | }
```

```
foreach ($x => $y|)         | foreach ($x => $y) {
                            |     |
                            | }
```

```
while ($condition|)         | while ($condition) {
                            |     |
                            | }
```

```
for ($i = 0; $i < ; $i++|)  | for ($i = 0; $i < ; $i++) {
                            |     |
                            | }
```

```
switch ($condition|)        | switch ($condition|) {
                            |     |
                            | }
```

```
function x(|)               | function x()
                            | {
                            |     |
                            | }
```

```
class x                     | class x
{                           | {
    public function y(|)    |     public function y()
}                           |     {
                            |         |
                            |     }
                            | }
```

<kbd>Ctrl</kbd>+<kbd>;</kbd>

```
'str|ing'                   | 'str|ing';
```

```
function_call(|)            | function_call();|
```

## Installation

**Sublime Text 3 only**

### Package Control installation

**Sublime Text 3 only**

The preferred method of installation is via Package Control.

1. Install [Package Control](https://packagecontrol.io)
2. From inside Sublime Text, open Package Control's Command Pallet: <kbd>Ctrl</kbd>+<kbd>Shift</kbd>+<kbd>P</kbd> (Windows, Linux) or <kbd>Cmd</kbd>+<kbd>Shift</kbd>+<kbd>P</kbd> on Mac.
3. Type `install package` and hit Return. A list of available packages will be displayed.
4. Type `php-grammar` and hit Return. The package will be downloaded to the appropriate directory.
5. Restart Sublime Text to complete installation. The features listed above should now be available.

_Note_: Sublime text has a native package for PHP. However, when sublime-php-grammar is enabled, the native package causes some conflicts. For this reason, sublime-php-grammar will automatically disable it. Since it doesn't bring anything new over sublime-php-grammar, this is not a loss. But remember, when you disable sublime-php-grammar, you have to reenable the native PHP package manually (if you want). Also, sublime-php-grammar provides [completions][php-completions] and [snippets][php-snippets] as separate packages.

### Manual installation

**Sublime Text 3 only**

1. Download or clone this repository to a directory named `php-grammar` in the Sublime Text Packages directory for your platform:
    * Linux: `git clone https://github.com/gerardroche/sublime-php-grammar.git ~/.config/sublime-text-3/Packages/php-grammar`
    * OS X: `git clone https://github.com/gerardroche/sublime-php-grammar.git ~/Library/Application\ Support/Sublime\ Text\ 3/Packages/php-grammar`
    * Windows: `git clone https://github.com/gerardroche/sublime-php-grammar.git %APPDATA%\Sublime/ Text/ 3/Packages/php-grammar`
2. Restart Sublime Text to complete installation

_Note_: Cloning into the Packages while ST is open can cause some warning message dialogs to appear and syntax highlighting to appear broken. This is harmless. Close the dialogs and files with no syntax highlighting and reopen them, and  restart ST. to avoid the dialog messages, close ST before cloning.

## Contributing

Issue reports and pull requests are always welcome.

See [CONTRIBUTING.md](CONTRIBUTING.md).

## Changelog

See [CHANGELOG.md](CHANGELOG.md).

## Complementary Plugins

* [PHP Completions](https://github.com/gerardroche/sublime-phpck)
* [PHP Snippets](https://github.com/gerardroche/sublime-php-snippets)
* [PHPUnit](https://github.com/gerardroche/sublime-phpunit)
* [PHPUnit Completions](https://github.com/gerardroche/sublime-phpunit-completions)
* [PHPUnit Snippets](https://github.com/gerardroche/sublime-phpunit-snippets)

## Credits

Originally converted from the [PHP TextMate bundle](https://github.com/textmate/php.tmbundle) and bundled with Sublime Text.

## License

sublime-php-grammar is released under the [BSD 3-Clause License](LICENSE).
