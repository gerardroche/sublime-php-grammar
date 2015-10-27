--TEST--
PSR 2 Coding Style Guide Example 4.4 (b)

https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md

See https://github.com/gerardroche/sublime-php-grammar/issues/17
--FILE--
<?php

namespace Vendor\Package;

class ClassName
{
    public function aVeryLongMethodName(
        ClassTypeHint $arg1,
        &$arg2,
        array $arg3 = []
    ) {
        echo 'method body';
    }
}

?>
--EXPECT--
<?php

namespace Vendor\Package;

class ClassName
{
    public function aVeryLongMethodName(
        ClassTypeHint $arg1,
        &$arg2,
        array $arg3 = []
    ) {
        echo 'method body';
    }
}

?>
