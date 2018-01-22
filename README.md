# WHAT PHPGRAMMAR IS

An improved PHP syntax, good indentation rules, smart macros, and more.

[![Build Status](https://img.shields.io/travis/gerardroche/sublime-php-grammar/master.svg?style=flat-square)](https://travis-ci.org/gerardroche/sublime-php-grammar) [![Build status](https://img.shields.io/appveyor/ci/gerardroche/sublime-php-grammar/master.svg?style=flat-square)](https://ci.appveyor.com/project/gerardroche/sublime-php-grammar/branch/master) [![Coverage Status](https://img.shields.io/coveralls/gerardroche/sublime-php-grammar/master.svg?style=flat-square)](https://coveralls.io/github/gerardroche/sublime-php-grammar?branch=master) [![Minimum Sublime Version](https://img.shields.io/badge/sublime-%3E%3D%203.0-brightgreen.svg?style=flat-square)](https://sublimetext.com) [![Latest Stable Version](https://img.shields.io/github/tag/gerardroche/sublime-php-grammar.svg?style=flat-square&label=stable)](https://github.com/gerardroche/sublime-php-grammar/tags) [![GitHub stars](https://img.shields.io/github/stars/gerardroche/sublime-php-grammar.svg?style=flat-square)](https://github.com/gerardroche/sublime-php-grammar/stargazers) [![Downloads](https://img.shields.io/packagecontrol/dt/php-grammar.svg?style=flat-square)](https://packagecontrol.io/packages/php-grammar) [![Author](https://img.shields.io/badge/twitter-gerardroche-blue.svg?style=flat-square)](https://twitter.com/gerardroche)

Completions and snippets are provided separately by [PHP Completions Kit](https://packagecontrol.io/browse/authors/gerardroche) and [PHP Snippets](https://packagecontrol.io/browse/authors/gerardroche).

**PHPGrammar has been renamed in v.2.0.0 (previously known as php-grammar)**

## INSTALLATION

### Package Control installation

The preferred method of installation is [Package Control](https://packagecontrol.io/browse/authors/gerardroche).

### Manual installation

Close Sublime Text, then download or clone this repository to a directory named `PHPGrammar` in the Sublime Text Packages directory for your platform:

* Linux: `git clone https://github.com/gerardroche/sublime-php-grammar.git ~/.config/sublime-text-3/Packages/php-grammar`
* OSX: `git clone https://github.com/gerardroche/sublime-php-grammar.git ~/Library/Application\ Support/Sublime\ Text\ 3/Packages/php-grammar`
* Windows: `git clone https://github.com/gerardroche/sublime-php-grammar.git %APPDATA%\Sublime/ Text/ 3/Packages/php-grammar`

## USAGE

### Smart macros

To insert any literal character add `Shift` e.g. in a case where `Enter` runs a macro, to insert a newline on `Enter` (instead of running the macro) press `Shift+Enter`.

#### On `Ctrl+Enter`

```php
<?php

array(                      //    array(
    'str|'                  //        'str',
)                           //        |
                            //    )
```

```php
<?php

'str|ing'                   //    'string';
                            //    |
```

```php
<?php

function_call(|)            //    function_call();
                            //    |
```

```php
<?php

if ($condition|)            //    if ($condition) {
                            //        |
                            //    }
```

```php
<?php

foreach ($x => $y|)         //    foreach ($x => $y) {
                            //        |
                            //    }
```

```php
<?php

while ($condition|)         //    while ($condition) {
                            //        |
                            //    }
```

```php
<?php

for ($i = 0; $i < ; $i++|)  //    for ($i = 0; $i < ; $i++) {
                            //        |
                            //    }
```

```php
<?php

switch ($condition|)        //    switch ($condition|) {
                            //        |
                            //    }
```

```php
<?php

function x(|)               //    function x()
                            //    {
                            //        |
                            //    }
```

```php
<?php

class x                     //    class x
{                           //    {
    public function y(|)    //        public function y()
}                           //        {
                            //            |
                            //        }
                            //    }
```

#### On `Ctrl+;`

```
'str|ing'                   //    'string';|
```

```php
<?php

function_call(|)            //    function_call();|
```

#### On `Enter`

```
array(|)                    //    array(
                            //        |
                            //    )
```

```php
<?php

function_call(|)            //    function_call(
                            //        |
                            //    )
```

```php
<?php

new class_name(|)           //    new class_name(
                            //        |
                            //    )
```

#### On `Tab`

```
$arr = array(               //    $arr = array(
    'str|'                  //        'str' => |
)                           //    )
```

```php
<?php

$arr = array(               //    $arr = array(
    'str'|                  //        'str' => |
)                           //    )
```

#### On `[`

```
$arr = |                    //    $arr = [|];
```

#### On `]`

```
$arr = [|                   //    $arr = [|];
```

## CONTRIBUTING

See [CONTRIBUTING.md](CONTRIBUTING.md).

## LICENSE

Released under the [BSD 3-Clause License](LICENSE).
