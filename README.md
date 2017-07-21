# WHAT PHP GRAMMAR IS

[![Minimum Sublime Version](https://img.shields.io/badge/sublime-%3E%3D%203.0-brightgreen.svg?style=flat-square)](https://sublimetext.com) [![Latest Stable Version](https://img.shields.io/github/tag/gerardroche/sublime-php-grammar.svg?style=flat-square&label=stable)](https://github.com/gerardroche/sublime-php-grammar/tags) [![GitHub stars](https://img.shields.io/github/stars/gerardroche/sublime-php-grammar.svg?style=flat-square)](https://github.com/gerardroche/sublime-php-grammar/stargazers) [![Downloads](https://img.shields.io/packagecontrol/dt/php-grammar.svg?style=flat-square)](https://packagecontrol.io/packages/php-grammar) [![Author](https://img.shields.io/badge/twitter-gerardroche-blue.svg?style=flat-square)](https://twitter.com/gerardroche)

An improved PHP syntax, indentation rules, smart completions, and more.

**For completions and snippets install [PHP Snippets] and [PHP Completions].**

## OVERVIEW

* [Features](#features)
* [Installation](#installation)
* [Usage](#usage)
* [Known Issues](#known-issues)
* [Contributing](#contributing)
* [Changelog](#changelog)
* [Credits](#credits)
* [License](#license)

## FEATURES

* Supports PHP ~7
* Improved support for syntax highlighters
* Good indentation rules
* Smart completions

## INSTALLATION

*For completions and snippets install [PHP Snippets] and [PHP Completions].*

*For a PHP 5.6 specific version, manually install and checkout the 5.x branch.*

### Package Control installation

The preferred method of installation is [Package Control](https://packagecontrol.io/browse/authors/gerardroche).

### Manual installation

1. Close Sublime Text.
2. Download or clone this repository to a directory named **`php-grammar`** in the Sublime Text Packages directory for your platform:
    * Linux: `git clone https://github.com/gerardroche/sublime-php-grammar.git ~/.config/sublime-text-3/Packages/php-grammar`
    * OS X: `git clone https://github.com/gerardroche/sublime-php-grammar.git ~/Library/Application\ Support/Sublime\ Text\ 3/Packages/php-grammar`
    * Windows: `git clone https://github.com/gerardroche/sublime-php-grammar.git %APPDATA%\Sublime/ Text/ 3/Packages/php-grammar`
3. Done!

*Note that if you disable or remove this package, you will need to re-enable the native PHP package manually.*

## USAGE

### Smart completions

*To insert a character overridden by a smart completion: prefix with <kbd>Ctrl</kbd> or <kbd>Shift</kbd>.*

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

## KNOWN ISSUES

* Error loading syntax file dialog on install [#45](https://github.com/gerardroche/sublime-php-grammar/issues/45)
* Snippets stop working [#99](https://github.com/gerardroche/sublime-php-grammar/issues/99)

## CONTRIBUTING

See [CONTRIBUTING.md](CONTRIBUTING.md).

## CHANGELOG

See [CHANGELOG.md](CHANGELOG.md).

## CREDITS

Originally converted from the [PHP TextMate package](https://github.com/textmate/php.tmbundle) bundled with Sublime Text.

## LICENSE

Released under the [BSD 3-Clause License](LICENSE).

[PHP Completions]: https://packagecontrol.io/browse/authors/gerardroche
[PHP Snippets]: https://packagecontrol.io/browse/authors/gerardroche
