--TEST--
#17 Type hinted short array syntax
--FILE--
<?php

function valid(array $var = array()) { }
function valid(array $var = []) { }
function valid(array &$var = array()) { }
function valid(array &$var = []) { }
function valid($var = array()) { }
function valid($var = []) { }
function valid(&$var = array()) { }
function valid(&$var = []) { }

function invalid(array &$var = ()) { }
function invalid(array &$var = array[]) { }
function invalid(array &$var = foobr[]) { }
function invalid(array $var = ()) { }
function invalid(array $var = array[]) { }
function invalid(array $var = foobr[]) { }

// @todo :bug: the following should be invalid

function invalid($var = array[]) { }
function invalid($var = foobar[]) { }
function invalid(&$var = array[]) { }
function invalid(&$var = foobar[]) { }

?>
--EXPECT--
match:2:33:meta.function.argument.array.php punctuation.definition.array.begin.php
match:2:34:meta.function.argument.array.php punctuation.definition.array.end.php
match:3:28:meta.function.argument.array.php punctuation.definition.array.begin.php
match:3:29:meta.function.argument.array.php punctuation.definition.array.end.php
match:4:34:meta.function.argument.array.php punctuation.definition.array.begin.php
match:4:35:meta.function.argument.array.php punctuation.definition.array.end.php
match:5:29:meta.function.argument.array.php punctuation.definition.array.begin.php
match:5:30:meta.function.argument.array.php punctuation.definition.array.end.php
match:6:27:meta.function.argument.default.php meta.array.php punctuation.definition.array.begin.php
match:6:28:meta.function.argument.default.php meta.array.php punctuation.definition.array.end.php
match:7:22:meta.function.argument.default.php meta.array.php punctuation.definition.array.begin.php
match:7:23:meta.function.argument.default.php meta.array.php punctuation.definition.array.end.php
match:8:28:meta.function.argument.default.php meta.array.php punctuation.definition.array.begin.php
match:8:29:meta.function.argument.default.php meta.array.php punctuation.definition.array.end.php
match:11:31:meta.function.arguments.php meta.function.argument.array.php invalid.illegal
match:12:31:meta.function.arguments.php meta.function.argument.array.php invalid.illegal
match:13:31:meta.function.arguments.php meta.function.argument.array.php invalid.illegal
match:14:31:meta.function.arguments.php meta.function.argument.array.php invalid.illegal
match:15:31:meta.function.arguments.php meta.function.argument.array.php invalid.illegal
match:16:31:meta.function.arguments.php meta.function.argument.array.php invalid.illegal
