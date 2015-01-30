--TEST--
Basic function support
--FILE--
<?php

array_map();
str_shuffle();
\str_shuffle();

?>
--EXPECT--
equal:2:0:source.php source.php.embedded.block.html support.function.array.php
match:2:0:source.php support.function.array.php
match:3:0:source.php support.function.string.php
match:4:0:source.php punctuation.separator.inheritance.php
match:4:1:source.php support.function.string.php
