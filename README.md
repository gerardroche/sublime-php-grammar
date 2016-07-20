# gerardroche/sublime-php-grammar

[![Author](http://img.shields.io/badge/author-@gerardroche-blue.svg?style=flat)](https://twitter.com/gerardroche)
[![Source Code](https://img.shields.io/badge/source-GitHub-blue.svg?style=flat)](https://github.com/gerardroche/sublime-php-grammar)
[![GitHub stars](https://img.shields.io/github/stars/gerardroche/sublime-php-grammar.svg?style=flat)](https://github.com/gerardroche/sublime-php-grammar/stargazers)
[![License](https://img.shields.io/badge/license-BSD--3-blue.svg?style=flat)](https://raw.githubusercontent.com/gerardroche/sublime-php-grammar/master/LICENSE)

[![Sublime version](https://img.shields.io/badge/sublime-v3-lightgrey.svg?style=flat)](http://sublimetext.com)
[![Latest version](https://img.shields.io/github/tag/gerardroche/sublime-php-grammar.svg?maxAge=2592000?style=flat&label=release)](https://github.com/gerardroche/sublime-php-grammar/tags)
[![Downloads](https://img.shields.io/packagecontrol/dt/php-grammar.svg?maxAge=2592000?style=flat)](https://packagecontrol.io/packages/php-grammar)

An improved PHP syntax, indentation rules, smart completions, and more.

Also install [PHP Snippets] and [PHP Completions] which are **not** included by this package.

## Overview

* [Features](#features)
* [Installation](#installation)
* [Usage](#usage)
* [Known Issues](#known-issues)
* [Contributing](#contributing)
* [Changelog](#changelog)
* [Credits](#credits)
* [License](#license)

## Features

* Supports PHP [~7.0](http://semver.org)
* Improved support for syntax highlighters
* Good indentation rules
* Smart completions

## Installation

Also install [PHP Snippets] and [PHP Completions] which are **not** included by this package.

For a PHP 5.6 specific version, manually install and checkout the 5.x branch.

### Package Control installation

The preferred method of installation is via Package Control.

1. Install [Package Control](https://packagecontrol.io).
2. From inside Sublime Text, open Package Control's Command Pallet: <kbd>Ctrl</kbd>+<kbd>Shift</kbd>+<kbd>P</kbd> (Windows, Linux) or <kbd>Cmd</kbd>+<kbd>Shift</kbd>+<kbd>P</kbd> on Mac.
3. Type `install package` and hit Return. A list of available packages will be displayed.
4. Type `php-grammar` and hit Return. The package will be downloaded to the appropriate directory.
5. Restart Sublime Text to complete ins,rtallation. The features listed above should now be available.

If you disable or remove this package, you will need to reenable the native PHP package manually.

### Manual installation

1. Close Sublime Text.
2. Download or clone this repository to a directory named `php-grammar` in the Sublime Text Packages directory for your platform:
    * Linux: `git clone https://github.com/gerardroche/sublime-php-grammar.git ~/.config/sublime-text-3/Packages/php-grammar`
    * OS X: `git clone https://github.com/gerardroche/sublime-php-grammar.git ~/Library/Application\ Support/Sublime\ Text\ 3/Packages/php-grammar`
    * Windows: `git clone https://github.com/gerardroche/sublime-php-grammar.git %APPDATA%\Sublime/ Text/ 3/Packages/php-grammar`
3. The features listed above will be available the next time Sublime Text is started..

If you disable or remove this package, you will need to reenable the native PHP package manually.

## Usage

### Smart completions

*To insert a character overriden by a smart completion: prefix with <kbd>Ctrl</kbd> or <kbd>Shift</kbd>.*

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
'str|ing'                   | 'string';|
```

```
function_call(|)            | function_call();|
```

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

<kbd>Tab</kbd>

```
$arr = array(               | $arr = array(
    'str|'                  |     'str' => |
)                           | )
```

```
$arr = array(               | $arr = array(
    'str'|                  |     'str' => |
)                           | )
```

<kbd>[</kbd>

```
$arr = |                    | $arr = [|];
```

<kbd>]</kbd>

```
$arr = [|                   | $arr = [|];
```

### Indentation rules

To reindent:

1. select the code to reindent
2. select `Menu > Edit > Line > Reindent`

Example

```
Original                   ->  Reindented

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

## Known issues

* Error loading syntax file dialog on install [#45](https://github.com/gerardroche/sublime-php-grammar/issues/45)
* Snippets stop working [#99](https://github.com/gerardroche/sublime-php-grammar/issues/99)

## Contributing

Your issue reports and pull requests are always welcome.

See [CONTRIBUTING.md](CONTRIBUTING.md).

## Changelog

See [CHANGELOG.md](CHANGELOG.md).

## Credits

Originally converted from the [PHP TextMate package](https://github.com/textmate/php.tmbundle) bundled with Sublime Text.

## License

Released under the [BSD 3-Clause License](LICENSE).

[PHP Grammar]: https://packagecontrol.io/packages/php-grammar
[PHP Completions]: https://packagecontrol.io/packages/PHP%20Completions%20Kit
[PHP Snippets]: https://packagecontrol.io/packages/php-snippets
[PHPUnit]: https://github.com/gerardroche/sublime-phpunit
[PHPUnit Completions]: https://github.com/gerardroche/sublime-phpunit-completions
[PHPUnit Snippets]: https://github.com/gerardroche/sublime-phpunit-snippets
