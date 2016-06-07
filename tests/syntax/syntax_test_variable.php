// SYNTAX TEST "Packages/php-grammar/PHP.tmLanguage"
<?php


echo $var;
//   ^^^^ variable.other.php
//   ^ variable.other.php punctuation.definition.variable.php

echo $_var; // starts with an underscore
//   ^^^^^ variable.other.php
//   ^ variable.other.php punctuation.definition.variable.php

echo $vär; // 'ä' is (Extended) ASCII 228.
//   ^^^^ variable.other.php
//   ^ variable.other.php punctuation.definition.variable.php

echo "$var";
//    ^^^^ variable.other.php
//    ^ variable.other.php punctuation.definition.variable.php

echo "${var}";
//    ^^^^^^ variable.other.php
//    ^^ variable.other.php punctuation.definition.variable.php
//         ^ variable.other.php punctuation.definition.variable.php

echo $var[0];
//   ^^^^ variable.other.php
//   ^ variable.other.php punctuation.definition.variable.php
//       ^ meta.array.php punctuation.definition.array.begin.php
//        ^ meta.array.php constant.numeric.php
//         ^ meta.array.php punctuation.definition.array.end.php

echo $var[$var];
//   ^^^^ variable.other.php
//   ^ variable.other.php punctuation.definition.variable.php
//       ^ meta.array.php punctuation.definition.array.begin.php
//        ^^^^ variable.other.php
//        ^ variable.other.php punctuation.definition.variable.php
//            ^ meta.array.php punctuation.definition.array.end.php

echo $var->prop;
//   ^ variable.other.php punctuation.definition.variable.php
//       ^^ keyword.operator.class.php
//   ^^^^ variable.other.php
//         ^^^^ variable.other.property.php

echo "$var->prop";
//    ^ variable.other.php punctuation.definition.variable.php
//        ^^ keyword.operator.class.php
//    ^^^^ variable.other.php
//          ^^^^ variable.other.property.php

/**
 * Superglobals: http://php.net/manual/language.variables.superglobals.php
 */

    $GLOBALS;
//  ^^^^^^^^ variable.other.global.safer.php
//  ^ variable.other.global.safer.php punctuation.definition.variable.php

    $_ENV;
//  ^^^^^ variable.other.global.safer.php
//  ^ variable.other.global.safer.php punctuation.definition.variable.php

    $_SERVER;
//  ^^^^^^^^ variable.other.global.safer.php
//  ^ variable.other.global.safer.php punctuation.definition.variable.php

    $_SESSION;
//  ^^^^^^^^^ variable.other.global.safer.php
//  ^ variable.other.global.safer.php punctuation.definition.variable.php

    $_GET;
//  ^^^^^ variable.other.global.php
//  ^ variable.other.global.php punctuation.definition.variable.php

    $_POST;
//  ^^^^^^ variable.other.global.php
//  ^ variable.other.global.php punctuation.definition.variable.php

    $_FILES;
//  ^^^^^^^ variable.other.global.php
//  ^ variable.other.global.php punctuation.definition.variable.php

    $_COOKIE;
//  ^^^^^^^^ variable.other.global.php
//  ^ variable.other.global.php punctuation.definition.variable.php

    $_REQUEST;
//  ^^^^^^^^^ variable.other.global.php
//  ^ variable.other.global.php punctuation.definition.variable.php
