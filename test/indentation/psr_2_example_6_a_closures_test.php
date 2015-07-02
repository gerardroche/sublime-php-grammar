--TEST--
PSR 2 Coding Style Guide Example 6 (a)

https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md
--FILE--
<?php

$closureWithArgs = function ($arg1, $arg2) {
    echo 'body';
};

$closureWithArgsAndVars = function ($arg1, $arg2) use ($var1, $var2) {
    echo 'body';
};

?>
--EXPECT--
<?php

$closureWithArgs = function ($arg1, $arg2) {
    echo 'body';
};

$closureWithArgsAndVars = function ($arg1, $arg2) use ($var1, $var2) {
    echo 'body';
};

?>
