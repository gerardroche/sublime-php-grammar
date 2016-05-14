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
 * Classes and interfaces added in PHP 7.0.0
 */

class i extends IntlChar {} // Added PHP 7.0.0
                // ^ support.class.builtin
class j extends ReflectionGenerator {} // Added PHP 7.0.0
                // ^ support.class.builtin
class k extends ReflectionType {} // Added PHP 7.0.0
                // ^ support.class.builtin
class l implements SessionUpdateTimestampHandlerInterface {} // Added PHP 7.0.0
                // ^ support.class.builtin
class m implements Throwable {} // Added PHP 7.0.0
                    // ^ support.class.builtin
class n extends Error {} // Added PHP 7.0.0
                // ^ support.class.builtin
class o extends TypeError {} // Added PHP 7.0.0
                // ^ support.class.builtin
class p extends ParseError {} // Added PHP 7.0.0
                // ^ support.class.builtin
class q extends AssertionError {} // Added PHP 7.0.0
                // ^ support.class.builtin
class r extends ArithmeticError {} // Added PHP 7.0.0
                // ^ support.class.builtin
class s extends DivisionByZeroError {} // Added PHP 7.0.0
                // ^ support.class.builtin
