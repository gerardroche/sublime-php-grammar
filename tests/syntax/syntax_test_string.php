// SYNTAX TEST "Packages/php-grammar/PHP.tmLanguage"
<?php

/**
 * Single quote
 */

echo 'str';
//   ^^^^^ string.quoted.single
//    ^^^ string.quoted.single meta.string-contents.quoted.single
//   ^ string.quoted.single punctuation.definition.string.begin
//       ^ string.quoted.single punctuation.definition.string.end

/**
 * Double quote
 */

echo "str";
//   ^^^^^ string.quoted.double
//    ^^^ string.quoted.double meta.string-contents.quoted.double
//   ^ string.quoted.double punctuation.definition.string.begin
//       ^ string.quoted.double punctuation.definition.string.end

/**
 * Embedded newlines
 */

echo 'You can also have embedded newlines in
//          ^ string.quoted.single meta.string-contents.quoted.single
strings this way as it is
//          ^ string.quoted.single meta.string-contents.quoted.single
okay to do';
// ^ string.quoted.single meta.string-contents.quoted.single

echo "You can also have embedded newlines in
//          ^ string.quoted.double meta.string-contents.quoted.double
strings this way as it is
//          ^ string.quoted.double meta.string-contents.quoted.double
okay to do";
// ^ string.quoted.double meta.string-contents.quoted.double
