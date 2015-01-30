# php-grammar

php-grammar plugin for Sublime Text. Provides a PHP syntax definition, decent indentation rules, macros, and other useful features.

## Overview

* [Features](#features)
* [Macros](#macros)
* [Installation](#installation)
* [Similar Plugins](#similar-plugins)
* [Contributing](#contributing)
* [Changelog](#changelog)
* [Complementary Plugins](#complementary-plugins)
* [Credits](#credits)
* [License](#license)

## Features

* Updated syntax definition support for PHP [~5.6][semver] builtin classes, functions, and constants which provides more up to date support for syntax highlighters.
* Decent macros
* Decent indentation rules
    - Pressing <kbd>Enter</kbd> between array parentheses indents the cursor on the next line and puts any closing parentheses on the following line with its indentation decreased.

    ```php
    $val = array(|)
    ```

    ```php
    $val = array(
        |
    )
    ```

    - Pressing a closing parentheses of an array will automatically indent it to the correct position.

    ```php
    $val = array(
        array(
            array(
                array(
                    |
    ```

    ```php 
    $val = array(
        array(
            array(
                array(
                )|
    ```

    - Select text and reindent with decent results `Menu > Edit > Line > Reindent`

    ```php
    $val = array(
    array(
    array(
    array(
    array(
    array(
    )
    )
    )
    )
    ),
    'x' => 'y',
    "multi" => array(
    "dimensional" => array(
    "array" => "x"
    'x' => array(
    'y' => 'z'
    )
    )
    )
    );
    ```

    ```php
    $val = array(
        array(
            array(
                array(
                    array(
                        array(
                        )
                    )
                )
            )
        ),
        'x' => 'y',
        "multi" => array(
            "dimensional" => array(
                "array" => "x"
                'x' => array(
                    'y' => 'z'
                )
            )
        )
    );
    ```

## Macros

<kbd>Enter</kbd> in an empty array inserts `\n|\n` and reindents

```php
array(|)
```

```php
array(
    |
)
```

<kbd>Enter</kbd> in array string appends `,\n`. *To insert a literal newline key <kbd>Shift</kbd>+<kbd>Enter</kbd>.*

```php
array(
    'x|'
)
```

```php
array(
    'x',
    |
)
```

## Installation

_Note_: Sublime text has a native package for PHP. However, when php-grammar is enabled, the native package causes some conflicts. For this reason, php-grammar will automatically disable it. Since it doesn't bring anything new over php-grammar, this is not a loss. But remember, when you disable php-grammar, you have to reenable the native PHP package manually (if you want). Also, php-grammar provides [completions][php-completions] and [snippets][php-snippets] as separate packages.

If you are using Sublime Text 2, you have to disable the native package _manually_. To do that, add `PHP` to your `ignored_packages` list in ST user settings:

```
"ignored_packages": [..., "PHP"]
```

### Manual installation

1. Download or clone this repository to a directory "php-grammar" in the Sublime Text Packages directory for your platform:
    * Sublime Text 3
        - Linux: `git clone https://github.com/gerardroche/sublime-php-grammar.git ~/.config/sublime-text-3/Packages/php-grammar`
        - OS X: `git clone https://github.com/gerardroche/sublime-php-grammar.git ~/Library/Application\ Support/Sublime\ Text\ 3/Packages/php-grammar`
        - Windows: `git clone https://github.com/gerardroche/sublime-php-grammar.git %APPDATA%\Sublime/ Text/ 3/Packages/php-grammar`
    * Sublime Text 2
        - Linux: `git clone https://github.com/gerardroche/sublime-php-grammar.git ~/.config/sublime-text-2/Packages/php-grammar`
        - OS X: `git clone https://github.com/gerardroche/sublime-php-grammar.git ~/Library/Application\ Support/Sublime\ Text\ 2/Packages/php-grammar`
        - Windows: `git clone https://github.com/gerardroche/sublime-php-grammar.git %APPDATA%\Sublime/ Text/ 2/Packages/php-grammar`
2. Restart Sublime Text to complete installation. The features listed above should now be available.

## Similar Plugins

TODO: Similar Plugins

## Contributing

Issue reports and pull requests are always welcome.

See [CONTRIBUTING.md](CONTRIBUTING.md).

## Changelog

See [CHANGELOG.md](CHANGELOG.md).

## Complementary Plugins

* [php-completions]
* [php-grammar]
* [php-snippets]
* [phpunit-completions]
* [phpunit-snippets]
* [phpunit]

## Credits

Originally converted from the [PHP TextMate bundle](https://github.com/textmate/php.tmbundle) and bundled with Sublime Text.

## License

php-grammar is released under the [BSD 3-Clause License][license].

[license]: LICENSE
[Package Control]: https://packagecontrol.io
[php-completions]: https://github.com/gerardroche/sublime-phpck
[php-fig]: http://www.php-fig.org
[php-grammar]: https://github.com/gerardroche/sublime-php-grammar
[php-snippets]: https://github.com/gerardroche/sublime-php-snippets
[phpunit-completions]: https://github.com/gerardroche/sublime-phpunitck
[phpunit-snippets]: https://github.com/gerardroche/sublime-phpunit-snippets
[phpunit]: https://github.com/gerardroche/sublime-phpunit
[semver]: http://semver.org
