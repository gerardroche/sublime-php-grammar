--TEST--
PSR 2 Coding Style Guide Example 5.6

https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md
--FILE--
<?php

try {
    echo 'try body';
} catch (FirstExceptionType $e) {
    echo 'catch body';
} catch (OtherExceptionType $e) {
    echo 'catch body';
}

?>
--EXPECT--
<?php

try {
    echo 'try body';
} catch (FirstExceptionType $e) {
    echo 'catch body';
} catch (OtherExceptionType $e) {
    echo 'catch body';
}

?>
