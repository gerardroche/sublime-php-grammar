// SYNTAX TEST "Packages/php-grammar/PHP.tmLanguage"
<?php

// TODO Return type declarations

function _a():        Countable {}
function _c():            array {}
//                        ^^^^^ storage.type.php
function _d():         callable {}
function _e():             bool {}
//                         ^^^^ storage.type.php
function _f():            float {}
//                        ^^^^^ storage.type.php
function _g():              int {}
//                          ^^^ storage.type.php
function _h():           string {}
//                       ^^^^^^ storage.type.php
