// SYNTAX TEST "Packages/php-grammar/PHP.tmLanguage"
<?php

function test(...$value) {}
//            ^^^^ meta.function.php meta.function.arguments.php meta.function.argument.no-default.php variable.other.php punctuation.definition.variable.php
function test(   $value) {}
//               ^ meta.function.php meta.function.arguments.php meta.function.argument.no-default.php variable.other.php punctuation.definition.variable.php

function test(class_name ...$value) {}
//                       ^^^^ meta.function.php meta.function.arguments.php meta.function.argument.typehinted.php variable.other.php punctuation.definition.variable.php
//            ^^^^^^^^^^ meta.function.php meta.function.arguments.php meta.function.argument.typehinted.php support.class.php
function test(class_name    $value) {}
//                          ^ meta.function.php meta.function.arguments.php meta.function.argument.typehinted.php variable.other.php punctuation.definition.variable.php
//            ^^^^^^^^^^ meta.function.php meta.function.arguments.php meta.function.argument.typehinted.php support.class.php
