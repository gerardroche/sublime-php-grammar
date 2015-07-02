--TEST--
PSR 2 Coding Style Guide Example 4.6 (b)

https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md
--FILE--
<?php

$foo->bar(
    $longArgument,
    $longerArgument,
    $muchLongerArgument
);

?>
--EXPECT--
<?php

$foo->bar(
    $longArgument,
    $longerArgument,
    $muchLongerArgument
);

?>
