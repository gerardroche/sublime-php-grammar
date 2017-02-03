// SYNTAX TEST "Packages/php-grammar/PHP.tmLanguage"
<?php

new stdClass();
//      ^ support.class.builtin

new \stdClass();
//  ^ punctuation.separator.inheritance
//      ^ support.class.builtin

class a implements Countable {}
//                      ^ support.class.builtin

class b implements \Countable {}
//                 ^ punctuation.separator.inheritance
//                      ^ support.class.builtin

class c extends Exception {}
//                  ^ support.class.builtin

class d extends \Exception {}
//              ^ punctuation.separator.inheritance
//                  ^ support.class.builtin

class e implements Countable, Iterator {}
//                      ^ support.class.builtin
//                              ^ support.class.builtin

class f implements \Countable, \Iterator {}
//                 ^ punctuation.separator.inheritance
//                      ^ support.class.builtin
//                             ^ punctuation.separator.inheritance
//                                  ^ support.class.builtin

class g implements \Countable, Iterator {}
//                 ^ punctuation.separator.inheritance
//                      ^ support.class.builtin
//                                  ^ support.class.builtin

class h implements Countable, \Iterator {}
//                      ^ support.class.builtin
//                            ^ punctuation.separator.inheritance
//                                  ^ support.class.builtin

function a(Iterator $i) {}
//          ^ support.class.builtin

function b(\Iterator $i) {}
//         ^ punctuation.separator.inheritance
//              ^ support.class.builtin

/**
 * Added in PHP 7.0.x
 */
class i extends IntlChar {}
                // ^ support.class.builtin
class j extends ReflectionGenerator {}
                // ^ support.class.builtin
class k extends ReflectionType {}
                // ^ support.class.builtin
class l implements SessionUpdateTimestampHandlerInterface {}
                // ^ support.class.builtin
class m implements Throwable {}
                    // ^ support.class.builtin
class n extends Error {}
                // ^ support.class.builtin
class o extends TypeError {}
                // ^ support.class.builtin
class p extends ParseError {}
                // ^ support.class.builtin
class q extends AssertionError {}
                // ^ support.class.builtin
class r extends ArithmeticError {}
                // ^ support.class.builtin
class s extends DivisionByZeroError {}
                // ^ support.class.builtin
