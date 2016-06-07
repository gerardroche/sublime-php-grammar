// SYNTAX TEST "Packages/php-grammar/PHP.tmLanguage"
<?php

function a(...$value) {}
//         ^^^^ meta.function.php meta.function.arguments.php meta.function.argument.no-default.php variable.other.php punctuation.definition.variable.php
function b(   $value) {}
//            ^ meta.function.php meta.function.arguments.php meta.function.argument.no-default.php variable.other.php punctuation.definition.variable.php

function c(class_name ...$value) {}
//                    ^^^^ meta.function.php meta.function.arguments.php meta.function.argument.typehinted.php variable.other.php punctuation.definition.variable.php
//         ^^^^^^^^^^ meta.function.php meta.function.arguments.php meta.function.argument.typehinted.php support.class.php
function d(class_name    $value) {}
//                       ^ meta.function.php meta.function.arguments.php meta.function.argument.typehinted.php variable.other.php punctuation.definition.variable.php
//         ^^^^^^^^^^ meta.function.php meta.function.arguments.php meta.function.argument.typehinted.php support.class.php
