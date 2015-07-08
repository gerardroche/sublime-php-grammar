--TEST--
PSR 2 Coding Style Guide Example 4.2

https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md
--FILE--
<?php

namespace Vendor\Package;

class ClassName
{
    public $foo = null;
}

?>
--EXPECT--
<?php

namespace Vendor\Package;

class ClassName
{
    public $foo = null;
}

?>
