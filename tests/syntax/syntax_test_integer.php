// SYNTAX TEST "Packages/php-grammar/PHP.tmLanguage"
<?php

$a = 1234; // decimal number
//   ^^^^ constant.numeric

$a = -123; // a negative number
//   ^ -constant.numeric
//    ^^^ constant.numeric

$a = 0123; // octal number (equivalent to 83 decimal)
//   ^^^^ constant.numeric

$a = 0x1A; // hexadecimal number (equivalent to 26 decimal)
//   ^^^^ constant.numeric

$a = 0b11111111; // binary number (equivalent to 255 decimal)
//   ^^^^^^^^^^ constant.numeric
