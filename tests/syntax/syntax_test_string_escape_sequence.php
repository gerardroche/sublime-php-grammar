// SYNTAX TEST "Packages/php-grammar/PHP.tmLanguage"
<?php

$double_quoted = "\_\a\x\'A11\u{p}";
//                ^^^^^^^^^^^^^^^^ -constant
//                ^^^^^^^^^^^^^^^^ -variable
//                ^^^^^^^^^^^^^^^^ -punctuation

$double_quoted_escapes = "_\n_\r_\t_\v_\e_\f_\\_\$_\"_\101_\x41_\u{aa}_";
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

$heredoc = <<<EOD
    " quotes in a heredoc do not need to be escaped
//  ^ -constant

    \_\a\x\'A11\u{p};
//  ^^^^^^^^^^^^^^^^ -constant

    \n
//  ^^ constant.character.escape
    \r
//  ^^ constant.character.escape
    \t
//  ^^ constant.character.escape
    \v
//  ^^ constant.character.escape
    \e
//  ^^ constant.character.escape
    \f
//  ^^ constant.character.escape
    \\
//  ^^ constant.character.escape
    \$
//  ^^ constant.character.escape
    \101
//  ^^^^ constant.numeric.octal
    \x41
//  ^^^^ constant.numeric.hex
    \u{aa}
//  ^^^^^^ constant.numeric.unicodepoint
EOD;

$single_quoted = '\_\a\x\n\r\t\$\"\101\x41\u{aa}$v_${v}_{$v}';
//                ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -constant
//                ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -variable
//                ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -punctuation

$single_quoted_escapes = '_\'_\\_';
//                        ^ -constant
//                         ^^ constant.character.escape
//                           ^ -constant
//                            ^^ constant.character.escape
//                              ^ -constant
