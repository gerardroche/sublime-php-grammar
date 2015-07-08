--TEST--
PSR 2 Coding Style Guide Example 5.2

https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md

TODO see https://github.com/gerardroche/sublime-php-grammar/issues/18
--FILE--
<?php

switch ($expr) {
    case 0:
        echo 'First case, with a break';
        break;
    case 1:
        echo 'Second case, which falls through';
        // no break
    case 2:
    case 3:
    case 4:
        echo 'Third case, return instead of break';
        return;
    default:
        echo 'Default case';
        break;
}

?>
--EXPECT--
<?php

switch ($expr) {
    case 0:
        echo 'First case, with a break';
        break;
    case 1:
        echo 'Second case, which falls through';
        // no break
    case 2:
    case 3:
    case 4:
        echo 'Third case, return instead of break';
        return;
    default:
        echo 'Default case';
        break;
}

?>
