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

/**
 * Classes and interfaces added in PHP 7.0.0
 */

class x extends IntlChar {} // Added PHP 7.0.0
                // ^ support.class.builtin
class x extends ReflectionGenerator {} // Added PHP 7.0.0
                // ^ support.class.builtin
class x extends ReflectionType {} // Added PHP 7.0.0
                // ^ support.class.builtin
class x implements SessionUpdateTimestampHandlerInterface {} // Added PHP 7.0.0
                // ^ support.class.builtin
class x implements Throwable {} // Added PHP 7.0.0
                    // ^ support.class.builtin
class x extends Error {} // Added PHP 7.0.0
                // ^ support.class.builtin
class x extends TypeError {} // Added PHP 7.0.0
                // ^ support.class.builtin
class x extends ParseError {} // Added PHP 7.0.0
                // ^ support.class.builtin
class x extends AssertionError {} // Added PHP 7.0.0
                // ^ support.class.builtin
class x extends ArithmeticError {} // Added PHP 7.0.0
                // ^ support.class.builtin
class x extends DivisionByZeroError {} // Added PHP 7.0.0
                // ^ support.class.builtin
