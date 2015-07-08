--TEST--
PSR 2 Coding Style Guide Example 4.6 (a)

https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md
--FILE--
<?php

bar();
$foo->bar($arg1);
Foo::bar($arg2, $arg3);

?>
--EXPECT--
<?php

bar();
$foo->bar($arg1);
Foo::bar($arg2, $arg3);

?>
