<?php

// https://github.com/php-fig/fig-standards/blob/14b51aabe931caccfad8f7c05566726086bf9eef/accepted/PSR-2-coding-style-guide.md

/////////////////
// 1.1 Example //
/////////////////

namespace Vendor\Package;

use FooInterface;
use BarClass as Bar;
use OtherVendor\OtherPackage\BazClass;

class Foo extends Bar implements FooInterface
{
    public function sampleFunction($a, $b = null)
    {
        if ($a === $b) {
            bar();
        } elseif ($a > $b) {
            $foo->bar($arg1);
        } else {
            BazClass::bar($arg2, $arg3);
        }
    }

    final public static function foo()
    {
        echo 'method body';
    }
}

////////////////////
// 4.2 Properties //
////////////////////

class ClassName
{
    public $foo = null;
}

/////////////////
// 4.3 Methods //
/////////////////

class ClassName
{
    public function fooBarBaz($arg1, &$arg2, $arg3 = [])
    {
        echo 'method body';
    }
}

//////////////////////////
// 4.4 Method Arguments //
//////////////////////////

class ClassName
{
    public function foo($arg1, &$arg2, $arg3 = [])
    {
        echo 'method body';
    }
}

//////////////////////////////////////
// 4.5. abstract, final, and static //
//////////////////////////////////////

abstract class ClassName
{
    protected static $foo;

    abstract protected function zim();

    final public static function bar()
    {
        echo 'method body';
    }
}

///////////////////////////
// 5.1. if, elseif, else //
///////////////////////////

if ($expr1) {
    echo 'if body';
} elseif ($expr2) {
    echo 'elseif body';
} else {
    echo 'else body';
}

///////////////////////////
//  5.3. while, do while //
///////////////////////////

while ($expr) {
    echo 'structure body';
}

do {
    echo 'structure body';
} while ($expr);

///////////////
//  5.4. for //
///////////////

for ($i = 0; $i < 10; $i++) {
    echo 'for body';
}

//////////////////
// 5.5. foreach //
//////////////////

foreach ($iterable as $key => $value) {
    echo 'foreach body';
}

/////////////////////
// 5.6. try, catch //
/////////////////////

try {
    echo 'try body';
} catch (FirstExceptionType $e) {
    echo 'catch body';
} catch (OtherExceptionType $e) {
    echo 'catch body';
}

/////////////////
// 6. Closures //
/////////////////

$closureWithArgs = function ($arg1, $arg2) {
    echo 'body';
};

$closureWithArgsAndVars = function ($arg1, $arg2) use ($var1, $var2) {
    echo 'body';
};
