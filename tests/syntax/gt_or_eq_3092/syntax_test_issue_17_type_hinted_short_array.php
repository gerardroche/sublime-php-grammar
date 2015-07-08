// SYNTAX TEST "Packages/php-grammar/PHP.tmLanguage"
<?php

function valid(array $var = array()) { }
//                               ^ meta.function.argument.array.php punctuation.definition.array.begin.php
//                                ^ meta.function.argument.array.php punctuation.definition.array.end.php
function valid(array $var = []) { }
//                          ^ meta.function.argument.array.php punctuation.definition.array.begin.php
//                           ^ meta.function.argument.array.php punctuation.definition.array.end.php
function valid(array &$var = array()) { }
//                                ^ meta.function.argument.array.php punctuation.definition.array.begin.php
//                                 ^ meta.function.argument.array.php punctuation.definition.array.end.php
function valid(array &$var = []) { }
//                           ^ meta.function.argument.array.php punctuation.definition.array.begin.php
//                            ^ meta.function.argument.array.php punctuation.definition.array.end.php
function valid($var = array()) { }
//                         ^ meta.function.argument.default.php meta.array.php punctuation.definition.array.begin.php
//                          ^ meta.function.argument.default.php meta.array.php punctuation.definition.array.end.php
function valid($var = []) { }
//                    ^ meta.function.argument.default.php meta.array.php punctuation.definition.array.begin.php
//                     ^ meta.function.argument.default.php meta.array.php punctuation.definition.array.end.php
function valid(&$var = array()) { }
//                          ^ meta.function.argument.default.php meta.array.php punctuation.definition.array.begin.php
//                           ^ meta.function.argument.default.php meta.array.php punctuation.definition.array.end.php
function valid(&$var = []) { }
//                     ^ meta.function.argument.default.php meta.array.php punctuation.definition.array.begin.php
//                      ^ meta.function.argument.default.php meta.array.php punctuation.definition.array.end.php
function invalid(array &$var = ()) { }
//                             ^ meta.function.arguments.php meta.function.argument.array.php invalid.illegal
//                              ^ meta.function.arguments.php meta.function.argument.array.php invalid.illegal
function invalid(array &$var = array[]) { }
//                             ^ meta.function.arguments.php meta.function.argument.array.php invalid.illegal
//                              ^ meta.function.arguments.php meta.function.argument.array.php invalid.illegal
//                               ^ meta.function.arguments.php meta.function.argument.array.php invalid.illegal
//                                ^ meta.function.arguments.php meta.function.argument.array.php invalid.illegal
//                                 ^ meta.function.arguments.php meta.function.argument.array.php invalid.illegal
//                                  ^ meta.function.arguments.php meta.function.argument.array.php invalid.illegal
//                                   ^ meta.function.arguments.php meta.function.argument.array.php invalid.illegal
function invalid(array &$var = foobr[]) { }
//                             ^ meta.function.arguments.php meta.function.argument.array.php invalid.illegal
//                              ^ meta.function.arguments.php meta.function.argument.array.php invalid.illegal
//                               ^ meta.function.arguments.php meta.function.argument.array.php invalid.illegal
//                                ^ meta.function.arguments.php meta.function.argument.array.php invalid.illegal
//                                 ^ meta.function.arguments.php meta.function.argument.array.php invalid.illegal
//                                  ^ meta.function.arguments.php meta.function.argument.array.php invalid.illegal
//                                   ^ meta.function.arguments.php meta.function.argument.array.php invalid.illegal
function invalid(array $var = ()) { }
//                            ^ meta.function.arguments.php meta.function.argument.array.php invalid.illegal
//                             ^ meta.function.arguments.php meta.function.argument.array.php invalid.illegal
function invalid(array $var = array[]) { }
//                            ^ meta.function.arguments.php meta.function.argument.array.php invalid.illegal
//                             ^ meta.function.arguments.php meta.function.argument.array.php invalid.illegal
//                              ^ meta.function.arguments.php meta.function.argument.array.php invalid.illegal
//                               ^ meta.function.arguments.php meta.function.argument.array.php invalid.illegal
//                                ^ meta.function.arguments.php meta.function.argument.array.php invalid.illegal
//                                 ^ meta.function.arguments.php meta.function.argument.array.php invalid.illegal
//                                  ^ meta.function.arguments.php meta.function.argument.array.php invalid.illegal
function invalid(array $var = foobr[]) { }
//                            ^ meta.function.arguments.php meta.function.argument.array.php invalid.illegal
//                             ^ meta.function.arguments.php meta.function.argument.array.php invalid.illegal
//                              ^ meta.function.arguments.php meta.function.argument.array.php invalid.illegal
//                               ^ meta.function.arguments.php meta.function.argument.array.php invalid.illegal
//                                ^ meta.function.arguments.php meta.function.argument.array.php invalid.illegal
//                                 ^ meta.function.arguments.php meta.function.argument.array.php invalid.illegal
//                                  ^ meta.function.arguments.php meta.function.argument.array.php invalid.illegal

// @todo :bug: the following should also be invalid:
function invalid($var = array[]) { }
function invalid($var = foobar[]) { }
function invalid(&$var = array[]) { }
function invalid(&$var = foobar[]) { }
