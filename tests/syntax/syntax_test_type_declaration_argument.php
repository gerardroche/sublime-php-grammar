// SYNTAX TEST "Packages/php-grammar/PHP.tmLanguage"
<?php

// Argument type declarations

function a(       Countable $_) {}
//                ^^^^^^^^^ meta.function.php meta.function.arguments.php meta.function.argument.typehinted.php support.class.builtin.php
function b(UserDefinedClass $_) {}
//         ^^^^^^^^^^^^^^^^ meta.function.php meta.function.arguments.php meta.function.argument.typehinted.php support.class.php
function c(           array $_) {}
//                    ^^^^^ meta.function.php meta.function.arguments.php meta.function.argument.array.php storage.type.php
function d(        callable $_) {}
//                 ^^^^^^^^ meta.function.php meta.function.arguments.php meta.function.argument.typehinted.php storage.type.php
function e(            bool $_) {}
//                     ^^^^ meta.function.php meta.function.arguments.php meta.function.argument.typehinted.php storage.type.php
function f(           float $_) {}
//                    ^^^^^ meta.function.php meta.function.arguments.php meta.function.argument.typehinted.php storage.type.php
function g(             int $_) {}
//                      ^^^ meta.function.php meta.function.arguments.php meta.function.argument.typehinted.php storage.type.php
function h(          string $_) {}
//                   ^^^^^^ meta.function.php meta.function.arguments.php meta.function.argument.typehinted.php storage.type.php
