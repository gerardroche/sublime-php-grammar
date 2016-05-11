# gerardroche/sublime-php-grammar

A plugin for Sublime Text.

Provides a PHP syntax definition, decent indentation rules, macros, and other useful features.

**Sublime Text 3 only**: All fixes and improvements since version 0.9.0 and all future fixes and improvements apply only to ST >= 3095 because build [3084](http://www.sublimetext.com/3dev) introduced a rewritten syntax definition file format and it is too much overhead to support multiple syntax formats. I know that many can't update to the latest build so the package will continue work for older versions of Sublime Text 3 just without the newer fixes and improvements.

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

* Support for PHP [~5.6](http://semver.org)
* Improved support for syntax highlighters
* Decent macros and smart completions
* Decent indentation rules

## Installation

For best results use the following completions and snippets packages:

* [PHP Completions](https://packagecontrol.io/packages/PHP%20Completions%20Kit)
* [PHP Snippets](https://packagecontrol.io/packages/php-snippets)

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
3. Restart Sublime Text to complete installation. The features listed above should now be available.

If you disable or remove this package, you will need to reenable the native PHP package manually.

## Usage

### Macros

To press any character overriden by a macro or smart completion prefix it with <kbd>Ctrl</kbd> or <kbd>Shift</kbd> e.g. to insert a newline press <kbd>Shift</kbd>+<kbd>Enter</kbd> or a tab press <kbd>Shift</kbd>+<kbd>Tab</kbd>.

<kbd>Enter</kbd>

```
array(|)                    | array(
                            |     |
                            | )

function_call(|)            | function_call(
                            |     |
                            | )

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

'str|ing'                   | 'string';
                            | |

function_call(|)            | function_call();
                            | |

if ($condition|)            | if ($condition) {
                            |     |
                            | }

foreach ($x => $y|)         | foreach ($x => $y) {
                            |     |
                            | }

while ($condition|)         | while ($condition) {
                            |     |
                            | }

for ($i = 0; $i < ; $i++|)  | for ($i = 0; $i < ; $i++) {
                            |     |
                            | }

switch ($condition|)        | switch ($condition|) {
                            |     |
                            | }

function x(|)               | function x()
                            | {
                            |     |
                            | }

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

function_call(|)            | function_call();|
```

<kbd>Tab</kbd>

```
$arr = array(               | $arr = array(
    'str|'                  |     'str' => |
)                           | )

$arr = array(               | $arr = array(
    'str'|                  |     'str' => |
)                           | )
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

## Contributing

Your issue reports and pull requests are always welcome.

See [CONTRIBUTING.md](CONTRIBUTING.md).

## Changelog

See [CHANGELOG.md](CHANGELOG.md).

## Credits

Originally converted from the [PHP TextMate package](https://github.com/textmate/php.tmbundle) bundled with Sublime Text.

## License

Released under the [BSD 3-Clause License](LICENSE).
