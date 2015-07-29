// SYNTAX TEST "Packages/php-grammar/PHP.tmLanguage"
<?php

function x() {}
// ^ meta.function storage.type.function
//       ^ meta.function entity.name.function
//        ^ meta.function punctuation.definition.parameters.begin
//         ^ meta.function punctuation.definition.parameters.end

function &x() {}
// ^ meta.function storage.type.function
//       ^ meta.function storage.modifier.reference
//        ^ meta.function entity.name.function
//         ^ meta.function punctuation.definition.parameters.begin
//          ^ meta.function punctuation.definition.parameters.end

/**
 * No default argument value
 */

function x($a) {}
//         ^ meta.function meta.function.arguments meta.function.argument.no-default variable punctuation
//          ^ meta.function meta.function.arguments meta.function.argument.no-default variable

function name($a, $b, $c) {}
//            ^ meta.function meta.function.arguments meta.function.argument.no-default variable punctuation
//             ^ meta.function meta.function.arguments meta.function.argument.no-default variable
//                ^ meta.function meta.function.arguments meta.function.argument.no-default variable punctuation
//                 ^ meta.function meta.function.arguments meta.function.argument.no-default variable
//                    ^ meta.function meta.function.arguments meta.function.argument.no-default variable punctuation
//                     ^ meta.function meta.function.arguments meta.function.argument.no-default variable

/**
 * With default argument value equal to null
 */

function x($a = null) {}
//         ^ meta.function meta.function.arguments meta.function.argument.default variable punctuation
//          ^ meta.function meta.function.arguments meta.function.argument.default variable
//            ^ meta.function meta.function.arguments meta.function.argument.default keyword.operator.assignment
//                ^ meta.function meta.function.arguments meta.function.argument.default constant

function x($a = null, $b = null, $c = null) {}
//         ^ meta.function meta.function.arguments meta.function.argument.default variable punctuation
//          ^ meta.function meta.function.arguments meta.function.argument.default variable
//            ^ meta.function meta.function.arguments meta.function.argument.default keyword.operator.assignment
//              ^ meta.function meta.function.arguments meta.function.argument.default constant
//                    ^ meta.function meta.function.arguments meta.function.argument.default variable punctuation
//                     ^ meta.function meta.function.arguments meta.function.argument.default variable
//                       ^ meta.function meta.function.arguments meta.function.argument.default keyword.operator.assignment
//                         ^ meta.function meta.function.arguments meta.function.argument.default constant
//                               ^ meta.function meta.function.arguments meta.function.argument.default variable punctuation
//                                ^ meta.function meta.function.arguments meta.function.argument.default variable
//                                  ^ meta.function meta.function.arguments meta.function.argument.default keyword.operator.assignment
//                                    ^ meta.function meta.function.arguments meta.function.argument.default constant

/**
 * With array type hint
 */

function x(array $a) {}
//         ^ meta.function meta.function.arguments meta.function.argument.array storage.type
//               ^ meta.function meta.function.arguments meta.function.argument.array variable punctuation
//                ^ meta.function meta.function.arguments meta.function.argument.array variable

function x(array $a, array $b, array $c) {}
//         ^ meta.function meta.function.arguments meta.function.argument.array storage.type
//               ^ meta.function meta.function.arguments meta.function.argument.array variable punctuation
//                ^ meta.function meta.function.arguments meta.function.argument.array variable
//                      ^ meta.function meta.function.arguments meta.function.argument.array storage.type
//                         ^ meta.function meta.function.arguments meta.function.argument.array variable punctuation
//                          ^ meta.function meta.function.arguments meta.function.argument.array variable
//                              ^ meta.function meta.function.arguments meta.function.argument.array storage.type
//                                   ^ meta.function meta.function.arguments meta.function.argument.array variable punctuation
//                                    ^ meta.function meta.function.arguments meta.function.argument.array variable

function x(array $a = null) {}
//         ^ meta.function meta.function.arguments meta.function.argument.array storage.type
//               ^ meta.function meta.function.arguments meta.function.argument.array variable punctuation
//                ^ meta.function meta.function.arguments meta.function.argument.array variable
//                  ^ meta.function meta.function.arguments meta.function.argument.array keyword.operator.assignment
//                    ^ meta.function meta.function.arguments meta.function.argument.array constant

function x(array $a = array()) {}
//                    ^ meta.function meta.function.arguments meta.function.argument.array support.function.construct
//                         ^ meta.function meta.function.arguments meta.function.argument.array punctuation.definition.array.begin
//                          ^ meta.function meta.function.arguments meta.function.argument.array punctuation.definition.array.end

function x(array $a = []) {}
//                    ^ meta.function meta.function.arguments meta.function.argument.array punctuation.definition.array.begin
//                     ^ meta.function meta.function.arguments meta.function.argument.array punctuation.definition.array.end

/**
 * With type hint
 */

function x(Name $a) {}
//         ^ meta.function meta.function.arguments meta.function.argument.typehinted support.class
//              ^ meta.function meta.function.arguments meta.function.argument.typehinted variable punctuation
//               ^ meta.function meta.function.arguments meta.function.argument.typehinted variable

function x(Countable $a) {}
//         ^ meta.function meta.function.arguments meta.function.argument.typehinted support.class
//                   ^ meta.function meta.function.arguments meta.function.argument.typehinted variable punctuation
//                    ^ meta.function meta.function.arguments meta.function.argument.typehinted variable

function x(Name $a = null) {}
//         ^ meta.function meta.function.arguments meta.function.argument.typehinted support.class
//              ^ meta.function meta.function.arguments meta.function.argument.typehinted variable punctuation
//               ^ meta.function meta.function.arguments meta.function.argument.typehinted variable
//                 ^ meta.function meta.function.arguments meta.function.argument.typehinted keyword.operator.assignment
//                   ^ meta.function meta.function.arguments meta.function.argument.typehinted constant
