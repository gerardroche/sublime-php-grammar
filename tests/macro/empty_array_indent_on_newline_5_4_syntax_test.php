--TEST--
Empty array [] syntax indent on newline
--FILE--
<?php

$x = [|]

?>
--EXPECT--
<?php

$x = [
    |
]

?>
