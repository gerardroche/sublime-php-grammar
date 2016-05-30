// SYNTAX TEST "Packages/php-grammar/PHP.tmLanguage"
<?php

class x
{
    public function __foobar()
//                  ^^^^^^^^ -support.function.magic.php
    {}

    public function __construct()
//                  ^^^^^^^^^^^ meta.function.php support.function.magic.php
    {}

    public function __destruct()
//                  ^^^^^^^^^^ meta.function.php support.function.magic.php
    {}

    public function __call($name, $arguments)
//                  ^^^^^^ meta.function.php support.function.magic.php
    {}

    public function __callStatic($name, $arguments)
//                  ^^^^^^^^^^^^ meta.function.php support.function.magic.php
    {}

    public function __get($name)
//                  ^^^^^ meta.function.php support.function.magic.php
    {}

    public function __set($name, $value)
//                  ^^^^^ meta.function.php support.function.magic.php
    {}

    public function __isset($name)
//                  ^^^^^^^ meta.function.php support.function.magic.php
    {}

    public function __unset($name)
//                  ^^^^^^^ meta.function.php support.function.magic.php
    {}

    public function __sleep()
//                  ^^^^^^^ meta.function.php support.function.magic.php
    {}

    public function __wakeup()
//                  ^^^^^^^^ meta.function.php support.function.magic.php
    {}

    public function __toString()
//                  ^^^^^^^^^^ meta.function.php support.function.magic.php
    {}

    public function __invoke()
//                  ^^^^^^^^ meta.function.php support.function.magic.php
    {}

    public function __set_state()
//                  ^^^^^^^^^^^ meta.function.php support.function.magic.php
    {}

    public function __clone()
//                  ^^^^^^^ meta.function.php support.function.magic.php
    {}

    public function __debugInfo()
//                  ^^^^^^^^^^^ meta.function.php support.function.magic.php
    {}
}
