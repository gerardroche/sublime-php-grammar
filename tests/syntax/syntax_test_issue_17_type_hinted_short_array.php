// SYNTAX TEST "Packages/php-grammar/PHP.tmLanguage"
<?php

function a____(array $var = array()) { }
//                               ^ meta.function.argument.array.php punctuation.definition.array.begin.php
//                                ^ meta.function.argument.array.php punctuation.definition.array.end.php
function b____(array $var = []) { }
//                          ^ meta.function.argument.array.php punctuation.definition.array.begin.php
//                           ^ meta.function.argument.array.php punctuation.definition.array.end.php
function c____(array &$var = array()) { }
//                                ^ meta.function.argument.array.php punctuation.definition.array.begin.php
//                                 ^ meta.function.argument.array.php punctuation.definition.array.end.php
function d____(array &$var = []) { }
//                           ^ meta.function.argument.array.php punctuation.definition.array.begin.php
//                            ^ meta.function.argument.array.php punctuation.definition.array.end.php
function e____($var = array()) { }
//                         ^ meta.function.argument.default.php meta.array.php punctuation.definition.array.begin.php
//                          ^ meta.function.argument.default.php meta.array.php punctuation.definition.array.end.php
function f____($var = []) { }
//                    ^ meta.function.argument.default.php meta.array.php punctuation.definition.array.begin.php
//                     ^ meta.function.argument.default.php meta.array.php punctuation.definition.array.end.php
function g____(&$var = array()) { }
//                          ^ meta.function.argument.default.php meta.array.php punctuation.definition.array.begin.php
//                           ^ meta.function.argument.default.php meta.array.php punctuation.definition.array.end.php
function h____(&$var = []) { }
//                     ^ meta.function.argument.default.php meta.array.php punctuation.definition.array.begin.php
//                      ^ meta.function.argument.default.php meta.array.php punctuation.definition.array.end.php
function _a_____(array &$var = ()) { }
//                             ^ meta.function.arguments.php meta.function.argument.array.php invalid.illegal
//                              ^ meta.function.arguments.php meta.function.argument.array.php invalid.illegal
function _b_____(array &$var = array[]) { }
//                             ^ meta.function.arguments.php meta.function.argument.array.php invalid.illegal
//                              ^ meta.function.arguments.php meta.function.argument.array.php invalid.illegal
//                               ^ meta.function.arguments.php meta.function.argument.array.php invalid.illegal
//                                ^ meta.function.arguments.php meta.function.argument.array.php invalid.illegal
//                                 ^ meta.function.arguments.php meta.function.argument.array.php invalid.illegal
//                                  ^ meta.function.arguments.php meta.function.argument.array.php invalid.illegal
//                                   ^ meta.function.arguments.php meta.function.argument.array.php invalid.illegal
function _c_____(array &$var = foobr[]) { }
//                             ^ meta.function.arguments.php meta.function.argument.array.php invalid.illegal
//                              ^ meta.function.arguments.php meta.function.argument.array.php invalid.illegal
//                               ^ meta.function.arguments.php meta.function.argument.array.php invalid.illegal
//                                ^ meta.function.arguments.php meta.function.argument.array.php invalid.illegal
//                                 ^ meta.function.arguments.php meta.function.argument.array.php invalid.illegal
//                                  ^ meta.function.arguments.php meta.function.argument.array.php invalid.illegal
//                                   ^ meta.function.arguments.php meta.function.argument.array.php invalid.illegal
function _d_____(array $var = ()) { }
//                            ^ meta.function.arguments.php meta.function.argument.array.php invalid.illegal
//                             ^ meta.function.arguments.php meta.function.argument.array.php invalid.illegal
function _e_____(array $var = array[]) { }
//                            ^ meta.function.arguments.php meta.function.argument.array.php invalid.illegal
//                             ^ meta.function.arguments.php meta.function.argument.array.php invalid.illegal
//                              ^ meta.function.arguments.php meta.function.argument.array.php invalid.illegal
//                               ^ meta.function.arguments.php meta.function.argument.array.php invalid.illegal
//                                ^ meta.function.arguments.php meta.function.argument.array.php invalid.illegal
//                                 ^ meta.function.arguments.php meta.function.argument.array.php invalid.illegal
//                                  ^ meta.function.arguments.php meta.function.argument.array.php invalid.illegal
function _f_____(array $var = foobr[]) { }
//                            ^ meta.function.arguments.php meta.function.argument.array.php invalid.illegal
//                             ^ meta.function.arguments.php meta.function.argument.array.php invalid.illegal
//                              ^ meta.function.arguments.php meta.function.argument.array.php invalid.illegal
//                               ^ meta.function.arguments.php meta.function.argument.array.php invalid.illegal
//                                ^ meta.function.arguments.php meta.function.argument.array.php invalid.illegal
//                                 ^ meta.function.arguments.php meta.function.argument.array.php invalid.illegal
//                                  ^ meta.function.arguments.php meta.function.argument.array.php invalid.illegal

// @todo :bug: the following should also be invalid:
function _g_____($var = array[]) { }
function _h_____($var = foobar[]) { }
function _i_____(&$var = array[]) { }
function _j_____(&$var = foobar[]) { }
