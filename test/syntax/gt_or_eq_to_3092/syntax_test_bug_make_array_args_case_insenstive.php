// SYNTAX TEST "Packages/php-grammar/PHP.tmLanguage"
<?php

function x(array $y = array()) {}
//          ^ meta.function.argument.array storage.type
//                      ^ meta.function.argument.array support.function.construct

function x(Array $y = array())  {}
//          ^ meta.function.argument.array storage.type
//                      ^ meta.function.argument.array support.function.construct

class x
{
    public function x(array $y = array())  {}
//                      ^ meta.function.argument.array storage.type
//                                  ^ meta.function.argument.array support.function.construct

    public function x(Array $y = array())  {}
//                      ^ meta.function.argument.array storage.type
//                                  ^ meta.function.argument.array support.function.construct
}
