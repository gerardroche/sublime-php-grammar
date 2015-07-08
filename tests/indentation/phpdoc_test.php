--TEST--
Basic PHPDoc
--FILE--
<?php

/**
 * ...
 */
class x
{
    /**
     * ...
     */
    public function y()
    {
        /**
         * ...
         */
        return $this;
    }
}

?>
--EXPECT--
<?php

/**
 * ...
 */
class x
{
    /**
     * ...
     */
    public function y()
    {
        /**
         * ...
         */
        return $this;
    }
}

?>
