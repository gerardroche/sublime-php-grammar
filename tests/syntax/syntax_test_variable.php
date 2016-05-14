// SYNTAX TEST "Packages/php-grammar/PHP.tmLanguage"
<?php

echo $variable;
//   ^^^^^^^^^ variable

echo $variable;
//   ^^^^^^^^^ variable

echo $_variable; // valid; starts with an underscore
//   ^^^^^^^^^^ variable

echo $täyte; // valid; 'ä' is (Extended) ASCII 228.
//   ^^^^^^ variable

echo "$variable";
//    ^^^^^^^^^ variable
