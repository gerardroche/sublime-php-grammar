--TEST--
Support magic method __toString bugfix
--FILE--
<?php

class x
{
    public function __toString()
    {

    }
}

?>
--EXPECT--
match:4:24:source.php meta.function.php support.function.magic.php
