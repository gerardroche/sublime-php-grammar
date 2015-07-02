--TEST--
PSR 2 Coding Style Guide Example 4.4 (a)

https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md
--FILE--
<?php

namespace Vendor\Package;

class ClassName
{
    public function foo($arg1, &$arg2, $arg3 = [])
    {
        echo 'method body';
    }
}

?>
--EXPECT--
<?php

namespace Vendor\Package;

class ClassName
{
    public function foo($arg1, &$arg2, $arg3 = [])
    {
        echo 'method body';
    }
}

?>
