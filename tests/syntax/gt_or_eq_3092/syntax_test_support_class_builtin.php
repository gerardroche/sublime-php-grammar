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

class x extends Exception {}
//                  ^ support.class.builtin

class x extends \Exception {}
//              ^ punctuation.separator.inheritance
//                  ^ support.class.builtin

class x implements Countable, Iterator {}
//                      ^ support.class.builtin
//                              ^ support.class.builtin

class x implements \Countable, \Iterator {}
//                 ^ punctuation.separator.inheritance
//                      ^ support.class.builtin
//                             ^ punctuation.separator.inheritance
//                                  ^ support.class.builtin

class x implements \Countable, Iterator {}
//                 ^ punctuation.separator.inheritance
//                      ^ support.class.builtin
//                                  ^ support.class.builtin

class x implements Countable, \Iterator {}
//                      ^ support.class.builtin
//                            ^ punctuation.separator.inheritance
//                                  ^ support.class.builtin

function x(Iterator $i) {}
//          ^ support.class.builtin

function x(\Iterator $i) {}
//         ^ punctuation.separator.inheritance
//              ^ support.class.builtin
