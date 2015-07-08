--TEST--
PSR 2 Coding Style Guide Example 4.1 (b)

https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md

TODO see https://github.com/gerardroche/sublime-php-grammar/issues/16
--FILE--
<?php
namespace Vendor\Package;

use FooClass;
use BarClass as Bar;
use OtherVendor\OtherPackage\BazClass;

class ClassName extends ParentClass implements
    \ArrayAccess,
    \Countable,
    \Serializable
{
    // constants, properties, methods
}

?>
--EXPECT--
<?php
namespace Vendor\Package;

use FooClass;
use BarClass as Bar;
use OtherVendor\OtherPackage\BazClass;

class ClassName extends ParentClass implements
    \ArrayAccess,
    \Countable,
    \Serializable
{
    // constants, properties, methods
}

?>
