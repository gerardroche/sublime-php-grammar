// SYNTAX TEST "Packages/php-grammar/PHP.tmLanguage"
<?php

function a() {}
// ^ meta.function storage.type.function
//       ^ meta.function entity.name.function
//        ^ meta.function punctuation.definition.parameters.begin
//         ^ meta.function punctuation.definition.parameters.end

function &b() {}
// ^ meta.function storage.type.function
//       ^ meta.function storage.modifier.reference
//        ^ meta.function entity.name.function
//         ^ meta.function punctuation.definition.parameters.begin
//          ^ meta.function punctuation.definition.parameters.end

/**
 * No default argument value
 */

function c($a) {}
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

function e($a = null) {}
//         ^ meta.function meta.function.arguments meta.function.argument.default variable punctuation
//          ^ meta.function meta.function.arguments meta.function.argument.default variable
//            ^ meta.function meta.function.arguments meta.function.argument.default keyword.operator.assignment
//                ^ meta.function meta.function.arguments meta.function.argument.default constant

function f($a = null, $b = null, $c = null) {}
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

function h(array $a) {}
//         ^ meta.function meta.function.arguments meta.function.argument.array storage.type
//               ^ meta.function meta.function.arguments meta.function.argument.array variable punctuation
//                ^ meta.function meta.function.arguments meta.function.argument.array variable

function i(array $a, array $b, array $c) {}
//         ^ meta.function meta.function.arguments meta.function.argument.array storage.type
//               ^ meta.function meta.function.arguments meta.function.argument.array variable punctuation
//                ^ meta.function meta.function.arguments meta.function.argument.array variable
//                      ^ meta.function meta.function.arguments meta.function.argument.array storage.type
//                         ^ meta.function meta.function.arguments meta.function.argument.array variable punctuation
//                          ^ meta.function meta.function.arguments meta.function.argument.array variable
//                              ^ meta.function meta.function.arguments meta.function.argument.array storage.type
//                                   ^ meta.function meta.function.arguments meta.function.argument.array variable punctuation
//                                    ^ meta.function meta.function.arguments meta.function.argument.array variable

function j(array $a = null) {}
//         ^ meta.function meta.function.arguments meta.function.argument.array storage.type
//               ^ meta.function meta.function.arguments meta.function.argument.array variable punctuation
//                ^ meta.function meta.function.arguments meta.function.argument.array variable
//                  ^ meta.function meta.function.arguments meta.function.argument.array keyword.operator.assignment
//                    ^ meta.function meta.function.arguments meta.function.argument.array constant

function k(array $a = array()) {}
//                    ^ meta.function meta.function.arguments meta.function.argument.array support.function.construct
//                         ^ meta.function meta.function.arguments meta.function.argument.array punctuation.definition.array.begin
//                          ^ meta.function meta.function.arguments meta.function.argument.array punctuation.definition.array.end

function l(array $a = []) {}
//                    ^ meta.function meta.function.arguments meta.function.argument.array punctuation.definition.array.begin
//                     ^ meta.function meta.function.arguments meta.function.argument.array punctuation.definition.array.end

/**
 * With userland class type hint
 */

function m(Name $a) {}
//         ^ meta.function meta.function.arguments meta.function.argument.typehinted support.class
//              ^ meta.function meta.function.arguments meta.function.argument.typehinted variable punctuation
//               ^ meta.function meta.function.arguments meta.function.argument.typehinted variable

function n(Name $a = null) {}
//         ^ meta.function meta.function.arguments meta.function.argument.typehinted support.class
//              ^ meta.function meta.function.arguments meta.function.argument.typehinted variable punctuation
//               ^ meta.function meta.function.arguments meta.function.argument.typehinted variable
//                 ^ meta.function meta.function.arguments meta.function.argument.typehinted keyword.operator.assignment
//                   ^ meta.function meta.function.arguments meta.function.argument.typehinted constant

/**
 * With builtin class type hint
 */

function o(Countable $a) {}
//         ^ meta.function meta.function.arguments meta.function.argument.typehinted support.class.builtin
//                   ^ meta.function meta.function.arguments meta.function.argument.typehinted variable punctuation
//                    ^ meta.function meta.function.arguments meta.function.argument.typehinted variable
