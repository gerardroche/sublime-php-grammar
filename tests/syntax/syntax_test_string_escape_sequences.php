// SYNTAX TEST "Packages/php-grammar/PHP.tmLanguage"
<?php

$double_quoted = "\_\a\x\'A\x411\1011\u{p}";
//                ^^^^^^^^^ -constant
//                             ^ -constant
//                                  ^^^^^^ -constant

$double_quoted_escapes = "_\n_\r_\t_\\_\$_\"_\e_\v_\f_\101_\x41_\u{aa}_";
//                        ^ -constant
//                         ^^ constant.character.escape
//                           ^ -constant
//                            ^^ constant.character.escape
//                              ^ -constant
//                               ^^ constant.character.escape
//                                 ^ -constant
//                                  ^^ constant.character.escape
//                                    ^ -constant
//                                     ^^ constant.character.escape
//                                       ^ -constant
//                                        ^^ constant.character.escape
//                                          ^ -constant
//                                           ^^ constant.character.escape
//                                             ^ -constant
//                                              ^^ constant.character.escape
//                                                ^ -constant
//                                                 ^^ constant.character.escape
//                                                   ^ -constant
//                                                    ^^^^ constant.numeric.octal
//                                                        ^ -constant
//                                                         ^^^^ constant.numeric.hex
//                                                             ^ -constant
//                                                              ^^^^^^ constant.numeric.unicodepoint
//                                                                    ^ -constant

$single_quoted = '\_\a\x\n\r\t\$\"\101\x41\u{aa}';
//                ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -constant

$single_quoted_escapes = '_\'_\\_';
//                        ^ -constant
//                         ^^ constant.character.escape
//                           ^ -constant
//                            ^^ constant.character.escape
//                              ^ -constant
