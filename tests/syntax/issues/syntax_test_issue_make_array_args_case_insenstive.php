// SYNTAX TEST "Packages/php-grammar/PHP.tmLanguage"
<?php

function a(array $y = array()) {}
//          ^ meta.function.argument.array storage.type
//                      ^ meta.function.argument.array support.function.construct

function b(Array $y = array())  {}
//          ^ meta.function.argument.array storage.type
//                      ^ meta.function.argument.array support.function.construct

class x
{
    public function a(array $y = array())  {}
//                      ^ meta.function.argument.array storage.type
//                                  ^ meta.function.argument.array support.function.construct

    public function b(Array $y = array())  {}
//                      ^ meta.function.argument.array storage.type
//                                  ^ meta.function.argument.array support.function.construct
}
