--TEST--
Empty array indent on newline
--FILE--
<?php

$x = array(|)

?>
--EXPECT--
<?php

$x = array(
    |
)

?>
