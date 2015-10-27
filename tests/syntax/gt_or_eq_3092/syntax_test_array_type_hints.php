// SYNTAX TEST "Packages/php-grammar/PHP.tmLanguage"
<?php

function a($a = array(), $b = "hi") {} // Should be OK
//          ^ -invalid.illegal
//                ^ -invalid.illegal
//                   ^ -invalid.illegal
//                    ^ -invalid.illegal

function b($a = [], $b = "hi") {} // Should be OK
//          ^ -invalid.illegal
//              ^ -invalid.illegal
//               ^ -invalid.illegal

function c(array $a = array(), $b = "hi") {} // Should be OK
//          ^ -invalid.illegal
//                ^ -invalid.illegal
//                      ^ -invalid.illegal

function d(array $a = [], $b = "hi") {} // Should be OK
//          ^ -invalid.illegal
//                ^ -invalid.illegal
//                    ^ -invalid.illegal
//                     ^ -invalid.illegal
function e(array $a = [1, 2, 3, 4], $b = "hi") {} // Should be OK
//          ^ -invalid.illegal
//                ^ -invalid.illegal
//                    ^ -invalid.illegal
//                      ^ -invalid.illegal
//                          ^ -invalid.illegal
//                               ^ -invalid.illegal

function f(array $a = null, $b = "hi") {} // Should be OK
//          ^ -invalid.illegal
//                ^ -invalid.illegal
//                      ^ -invalid.illegal

function g(array $a = (), $b = "hi") {} // Should be invalid
//                    ^ invalid.illegal
//                     ^ invalid.illegal

function h(array $a = 1234, $b = "hi") {} // Should be invalid
//                    ^ invalid.illegal
//                     ^ invalid.illegal
//                      ^ invalid.illegal
//                       ^ invalid.illegal
