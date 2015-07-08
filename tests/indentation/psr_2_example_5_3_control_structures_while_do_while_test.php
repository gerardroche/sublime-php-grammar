--TEST--
PSR 2 Coding Style Guide Example 5.3

https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md
--FILE--
<?php

while ($expr) {
    echo 'structure body';
}

do {
    echo 'structure body';
} while ($expr);

?>
--EXPECT--
<?php

while ($expr) {
    echo 'structure body';
}

do {
    echo 'structure body';
} while ($expr);

?>
