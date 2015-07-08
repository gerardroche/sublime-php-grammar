--TEST--
String escape sequences
--FILE--
<?php

$double_quoted = "\_\a\x\'A\x411\1011";

$double_quoted_escapes = "_\n_\r_\t_\\_\$_\"_\101_\x41_";

$double_quoted_escapes = "_\e_";

$double_quoted_escapes = "_\v_\f_";

$single_quoted = '\_\a\x\n\r\t\$\"\101\x41';

$single_quoted_escapes = '_\'_\\_';

?>
--EXPECT--
source.php source.php.embedded.block.html punctuation.section.embedded.begin.php
source.php source.php.embedded.block.html punctuation.section.embedded.begin.php
source.php source.php.embedded.block.html punctuation.section.embedded.begin.php
source.php source.php.embedded.block.html punctuation.section.embedded.begin.php
source.php source.php.embedded.block.html punctuation.section.embedded.begin.php
source.php source.php.embedded.block.html
source.php source.php.embedded.block.html
source.php source.php.embedded.block.html variable.other.php punctuation.definition.variable.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html
source.php source.php.embedded.block.html keyword.operator.assignment.php
source.php source.php.embedded.block.html
source.php source.php.embedded.block.html string.quoted.double.php punctuation.definition.string.begin.php
source.php source.php.embedded.block.html string.quoted.double.php meta.string-contents.quoted.double.php
source.php source.php.embedded.block.html string.quoted.double.php meta.string-contents.quoted.double.php
source.php source.php.embedded.block.html string.quoted.double.php meta.string-contents.quoted.double.php
source.php source.php.embedded.block.html string.quoted.double.php meta.string-contents.quoted.double.php
source.php source.php.embedded.block.html string.quoted.double.php meta.string-contents.quoted.double.php
source.php source.php.embedded.block.html string.quoted.double.php meta.string-contents.quoted.double.php
source.php source.php.embedded.block.html string.quoted.double.php meta.string-contents.quoted.double.php
source.php source.php.embedded.block.html string.quoted.double.php meta.string-contents.quoted.double.php
source.php source.php.embedded.block.html string.quoted.double.php meta.string-contents.quoted.double.php
source.php source.php.embedded.block.html string.quoted.double.php meta.string-contents.quoted.double.php constant.numeric.hex.php
source.php source.php.embedded.block.html string.quoted.double.php meta.string-contents.quoted.double.php constant.numeric.hex.php
source.php source.php.embedded.block.html string.quoted.double.php meta.string-contents.quoted.double.php constant.numeric.hex.php
source.php source.php.embedded.block.html string.quoted.double.php meta.string-contents.quoted.double.php constant.numeric.hex.php
source.php source.php.embedded.block.html string.quoted.double.php meta.string-contents.quoted.double.php
source.php source.php.embedded.block.html string.quoted.double.php meta.string-contents.quoted.double.php constant.numeric.octal.php
source.php source.php.embedded.block.html string.quoted.double.php meta.string-contents.quoted.double.php constant.numeric.octal.php
source.php source.php.embedded.block.html string.quoted.double.php meta.string-contents.quoted.double.php constant.numeric.octal.php
source.php source.php.embedded.block.html string.quoted.double.php meta.string-contents.quoted.double.php constant.numeric.octal.php
source.php source.php.embedded.block.html string.quoted.double.php meta.string-contents.quoted.double.php
source.php source.php.embedded.block.html string.quoted.double.php punctuation.definition.string.end.php
source.php source.php.embedded.block.html punctuation.terminator.expression.php
source.php source.php.embedded.block.html
source.php source.php.embedded.block.html
source.php source.php.embedded.block.html variable.other.php punctuation.definition.variable.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html
source.php source.php.embedded.block.html keyword.operator.assignment.php
source.php source.php.embedded.block.html
source.php source.php.embedded.block.html string.quoted.double.php punctuation.definition.string.begin.php
source.php source.php.embedded.block.html string.quoted.double.php meta.string-contents.quoted.double.php
source.php source.php.embedded.block.html string.quoted.double.php meta.string-contents.quoted.double.php constant.character.escape.php
source.php source.php.embedded.block.html string.quoted.double.php meta.string-contents.quoted.double.php constant.character.escape.php
source.php source.php.embedded.block.html string.quoted.double.php meta.string-contents.quoted.double.php
source.php source.php.embedded.block.html string.quoted.double.php meta.string-contents.quoted.double.php constant.character.escape.php
source.php source.php.embedded.block.html string.quoted.double.php meta.string-contents.quoted.double.php constant.character.escape.php
source.php source.php.embedded.block.html string.quoted.double.php meta.string-contents.quoted.double.php
source.php source.php.embedded.block.html string.quoted.double.php meta.string-contents.quoted.double.php constant.character.escape.php
source.php source.php.embedded.block.html string.quoted.double.php meta.string-contents.quoted.double.php constant.character.escape.php
source.php source.php.embedded.block.html string.quoted.double.php meta.string-contents.quoted.double.php
source.php source.php.embedded.block.html string.quoted.double.php meta.string-contents.quoted.double.php constant.character.escape.php
source.php source.php.embedded.block.html string.quoted.double.php meta.string-contents.quoted.double.php constant.character.escape.php
source.php source.php.embedded.block.html string.quoted.double.php meta.string-contents.quoted.double.php
source.php source.php.embedded.block.html string.quoted.double.php meta.string-contents.quoted.double.php constant.character.escape.php
source.php source.php.embedded.block.html string.quoted.double.php meta.string-contents.quoted.double.php constant.character.escape.php
source.php source.php.embedded.block.html string.quoted.double.php meta.string-contents.quoted.double.php
source.php source.php.embedded.block.html string.quoted.double.php meta.string-contents.quoted.double.php constant.character.escape.php
source.php source.php.embedded.block.html string.quoted.double.php meta.string-contents.quoted.double.php constant.character.escape.php
source.php source.php.embedded.block.html string.quoted.double.php meta.string-contents.quoted.double.php
source.php source.php.embedded.block.html string.quoted.double.php meta.string-contents.quoted.double.php constant.numeric.octal.php
source.php source.php.embedded.block.html string.quoted.double.php meta.string-contents.quoted.double.php constant.numeric.octal.php
source.php source.php.embedded.block.html string.quoted.double.php meta.string-contents.quoted.double.php constant.numeric.octal.php
source.php source.php.embedded.block.html string.quoted.double.php meta.string-contents.quoted.double.php constant.numeric.octal.php
source.php source.php.embedded.block.html string.quoted.double.php meta.string-contents.quoted.double.php
source.php source.php.embedded.block.html string.quoted.double.php meta.string-contents.quoted.double.php constant.numeric.hex.php
source.php source.php.embedded.block.html string.quoted.double.php meta.string-contents.quoted.double.php constant.numeric.hex.php
source.php source.php.embedded.block.html string.quoted.double.php meta.string-contents.quoted.double.php constant.numeric.hex.php
source.php source.php.embedded.block.html string.quoted.double.php meta.string-contents.quoted.double.php constant.numeric.hex.php
source.php source.php.embedded.block.html string.quoted.double.php meta.string-contents.quoted.double.php
source.php source.php.embedded.block.html string.quoted.double.php punctuation.definition.string.end.php
source.php source.php.embedded.block.html punctuation.terminator.expression.php
source.php source.php.embedded.block.html
source.php source.php.embedded.block.html
source.php source.php.embedded.block.html variable.other.php punctuation.definition.variable.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html
source.php source.php.embedded.block.html keyword.operator.assignment.php
source.php source.php.embedded.block.html
source.php source.php.embedded.block.html string.quoted.double.php punctuation.definition.string.begin.php
source.php source.php.embedded.block.html string.quoted.double.php meta.string-contents.quoted.double.php
source.php source.php.embedded.block.html string.quoted.double.php meta.string-contents.quoted.double.php constant.character.escape.php
source.php source.php.embedded.block.html string.quoted.double.php meta.string-contents.quoted.double.php constant.character.escape.php
source.php source.php.embedded.block.html string.quoted.double.php meta.string-contents.quoted.double.php
source.php source.php.embedded.block.html string.quoted.double.php punctuation.definition.string.end.php
source.php source.php.embedded.block.html punctuation.terminator.expression.php
source.php source.php.embedded.block.html
source.php source.php.embedded.block.html
source.php source.php.embedded.block.html variable.other.php punctuation.definition.variable.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html
source.php source.php.embedded.block.html keyword.operator.assignment.php
source.php source.php.embedded.block.html
source.php source.php.embedded.block.html string.quoted.double.php punctuation.definition.string.begin.php
source.php source.php.embedded.block.html string.quoted.double.php meta.string-contents.quoted.double.php
source.php source.php.embedded.block.html string.quoted.double.php meta.string-contents.quoted.double.php constant.character.escape.php
source.php source.php.embedded.block.html string.quoted.double.php meta.string-contents.quoted.double.php constant.character.escape.php
source.php source.php.embedded.block.html string.quoted.double.php meta.string-contents.quoted.double.php
source.php source.php.embedded.block.html string.quoted.double.php meta.string-contents.quoted.double.php constant.character.escape.php
source.php source.php.embedded.block.html string.quoted.double.php meta.string-contents.quoted.double.php constant.character.escape.php
source.php source.php.embedded.block.html string.quoted.double.php meta.string-contents.quoted.double.php
source.php source.php.embedded.block.html string.quoted.double.php punctuation.definition.string.end.php
source.php source.php.embedded.block.html punctuation.terminator.expression.php
source.php source.php.embedded.block.html
source.php source.php.embedded.block.html
source.php source.php.embedded.block.html variable.other.php punctuation.definition.variable.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html
source.php source.php.embedded.block.html keyword.operator.assignment.php
source.php source.php.embedded.block.html
source.php source.php.embedded.block.html string.quoted.single.php punctuation.definition.string.begin.php
source.php source.php.embedded.block.html string.quoted.single.php meta.string-contents.quoted.single.php
source.php source.php.embedded.block.html string.quoted.single.php meta.string-contents.quoted.single.php
source.php source.php.embedded.block.html string.quoted.single.php meta.string-contents.quoted.single.php
source.php source.php.embedded.block.html string.quoted.single.php meta.string-contents.quoted.single.php
source.php source.php.embedded.block.html string.quoted.single.php meta.string-contents.quoted.single.php
source.php source.php.embedded.block.html string.quoted.single.php meta.string-contents.quoted.single.php
source.php source.php.embedded.block.html string.quoted.single.php meta.string-contents.quoted.single.php
source.php source.php.embedded.block.html string.quoted.single.php meta.string-contents.quoted.single.php
source.php source.php.embedded.block.html string.quoted.single.php meta.string-contents.quoted.single.php
source.php source.php.embedded.block.html string.quoted.single.php meta.string-contents.quoted.single.php
source.php source.php.embedded.block.html string.quoted.single.php meta.string-contents.quoted.single.php
source.php source.php.embedded.block.html string.quoted.single.php meta.string-contents.quoted.single.php
source.php source.php.embedded.block.html string.quoted.single.php meta.string-contents.quoted.single.php
source.php source.php.embedded.block.html string.quoted.single.php meta.string-contents.quoted.single.php
source.php source.php.embedded.block.html string.quoted.single.php meta.string-contents.quoted.single.php
source.php source.php.embedded.block.html string.quoted.single.php meta.string-contents.quoted.single.php
source.php source.php.embedded.block.html string.quoted.single.php meta.string-contents.quoted.single.php
source.php source.php.embedded.block.html string.quoted.single.php meta.string-contents.quoted.single.php
source.php source.php.embedded.block.html string.quoted.single.php meta.string-contents.quoted.single.php
source.php source.php.embedded.block.html string.quoted.single.php meta.string-contents.quoted.single.php
source.php source.php.embedded.block.html string.quoted.single.php meta.string-contents.quoted.single.php
source.php source.php.embedded.block.html string.quoted.single.php meta.string-contents.quoted.single.php
source.php source.php.embedded.block.html string.quoted.single.php meta.string-contents.quoted.single.php
source.php source.php.embedded.block.html string.quoted.single.php meta.string-contents.quoted.single.php
source.php source.php.embedded.block.html string.quoted.single.php punctuation.definition.string.end.php
source.php source.php.embedded.block.html punctuation.terminator.expression.php
source.php source.php.embedded.block.html
source.php source.php.embedded.block.html
source.php source.php.embedded.block.html variable.other.php punctuation.definition.variable.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html variable.other.php
source.php source.php.embedded.block.html
source.php source.php.embedded.block.html keyword.operator.assignment.php
source.php source.php.embedded.block.html
source.php source.php.embedded.block.html string.quoted.single.php punctuation.definition.string.begin.php
source.php source.php.embedded.block.html string.quoted.single.php meta.string-contents.quoted.single.php
source.php source.php.embedded.block.html string.quoted.single.php meta.string-contents.quoted.single.php constant.character.escape.php
source.php source.php.embedded.block.html string.quoted.single.php meta.string-contents.quoted.single.php constant.character.escape.php
source.php source.php.embedded.block.html string.quoted.single.php meta.string-contents.quoted.single.php
source.php source.php.embedded.block.html string.quoted.single.php meta.string-contents.quoted.single.php constant.character.escape.php
source.php source.php.embedded.block.html string.quoted.single.php meta.string-contents.quoted.single.php constant.character.escape.php
source.php source.php.embedded.block.html string.quoted.single.php meta.string-contents.quoted.single.php
source.php source.php.embedded.block.html string.quoted.single.php punctuation.definition.string.end.php
source.php source.php.embedded.block.html punctuation.terminator.expression.php
source.php source.php.embedded.block.html
source.php source.php.embedded.block.html
source.php source.php.embedded.block.html punctuation.section.embedded.end.php source.php
source.php source.php.embedded.block.html punctuation.section.embedded.end.php
