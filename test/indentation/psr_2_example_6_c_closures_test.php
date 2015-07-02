--TEST--
PSR 2 Coding Style Guide Example 6 (c)

https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md
--FILE--
<?php

$foo->bar(
    $arg1,
    function ($arg2) use ($var1) {
        echo 'body';
    },
    $arg3
);

?>
--EXPECT--
<?php

$foo->bar(
    $arg1,
    function ($arg2) use ($var1) {
        echo 'body';
    },
    $arg3
);

?>
