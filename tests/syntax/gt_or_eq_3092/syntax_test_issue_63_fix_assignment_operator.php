// SYNTAX TEST "Packages/php-grammar/PHP.tmLanguage"
<?php

$assignment = 1;
//          ^ keyword.operator.assignment

$assignment -= 1;
//          ^ keyword.operator.assignment
//           ^ keyword.operator.assignment

$assignment <<= 1;
//          ^ keyword.operator.assignment
//           ^ keyword.operator.assignment
//            ^ keyword.operator.assignment
