--TEST--
PSR 2 Coding Style Guide Example 5.1

https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md
--FILE--
<?php

if ($expr1) {
    echo 'if body';
} elseif ($expr2) {
    echo 'elseif body';
} else {
    echo 'else body;';
}

?>
--EXPECT--
<?php

if ($expr1) {
    echo 'if body';
} elseif ($expr2) {
    echo 'elseif body';
} else {
    echo 'else body;';
}

?>
