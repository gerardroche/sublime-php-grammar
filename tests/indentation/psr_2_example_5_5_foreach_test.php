--TEST--
PSR 2 Coding Style Guide Example 5.5

https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md
--FILE--
<?php

foreach ($iterable as $key => $value) {
    echo 'foreach body';
}

?>
--EXPECT--
<?php

foreach ($iterable as $key => $value) {
    echo 'foreach body';
}

?>
