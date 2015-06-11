// SYNTAX TEST "Packages/php-grammar/PHP.tmLanguage"
<?php

new stdClass()
//      ^ support.class.builtin

new \stdClass()
//  ^ punctuation.separator.inheritance
//      ^ support.class.builtin

class x implements Countable {}
//                      ^ support.class.builtin

class x implements \Countable {}
//                 ^ punctuation.separator.inheritance
//                      ^ support.class.builtin

class e extends Exception {}
//                  ^ support.class.builtin

class e extends \Exception {}
//              ^ punctuation.separator.inheritance
//                  ^ support.class.builtin

