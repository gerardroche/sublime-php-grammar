--TEST--
PSR 2 Coding Style Guide Example 5.4

https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md
--FILE--
<?php

for ($i = 0; $i < 10; $i++) {
    echo 'for body';
}

?>
--EXPECT--
<?php

for ($i = 0; $i < 10; $i++) {
    echo 'for body';
}

?>
