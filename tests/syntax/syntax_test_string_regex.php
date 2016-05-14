// SYNTAX TEST "Packages/php-grammar/PHP.tmLanguage"
<?php

/**
 * Double quoted
 */

preg_match("/reg exp/");
//         ^^^^^^^^^^^ string.regexp.double-quoted
//         ^ string.regexp.double-quoted punctuation.definition.string.begin
//                   ^ string.regexp.double-quoted punctuation.definition.string.end

/**
 * Single quoted
 */

preg_match('/reg exp/');
//         ^^^^^^^^^^^ string.regexp.single-quoted
//         ^ string.regexp.single-quoted punctuation.definition.string.begin
//                   ^ string.regexp.single-quoted punctuation.definition.string.end


/**
 * Modifiers source.regexp.double-quoted
 */

preg_match('/reg exp/imsxADSUXJu');
//                   ^^^^^^^^^^^ string.regexp.single-quoted

preg_match('/reg exp/e');
//                   ^ -string.regexp

preg_match("/reg exp/e");
//                   ^ -string.regexp
