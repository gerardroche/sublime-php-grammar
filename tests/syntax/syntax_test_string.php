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


$variable = "$variable";
$variable = "$variable->property";
$variable =  $variable->property;

/**
 * Heredoc
 */

$heredoc_syntax = <<<EOT
//                ^^^ string.unquoted.heredoc punctuation.definition.string
//                   ^^^ string.unquoted.heredoc keyword.operator.heredoc
string
// ^ string.unquoted.heredoc
EOT;
// <- string.unquoted.heredoc keyword.operator.heredoc

$heredoc_html = <<<HTML
//              ^ string.unquoted.heredoc meta.embedded.html punctuation.section.embedded.begin punctuation.definition.string
//                 ^ string.unquoted.heredoc meta.embedded.html punctuation.section.embedded.begin keyword.operator.heredoc
string
^ string.unquoted.heredoc meta.embedded.html text.html
HTML;
// <- string.unquoted.heredoc keyword.operator.heredoc punctuation.section.embedded.end

$heredoc__xml = <<<XML
//              ^ string.unquoted.heredoc meta.embedded.xml punctuation.section.embedded.begin punctuation.definition.string
//                 ^ string.unquoted.heredoc meta.embedded.xml punctuation.section.embedded.begin keyword.operator.heredoc
string
^ string.unquoted.heredoc meta.embedded.xml text.xml
XML;
// <- string.unquoted.heredoc keyword.operator.heredoc punctuation.section.embedded.end

$heredoc__sql = <<<SQL
//              ^ string.unquoted.heredoc meta.embedded.sql punctuation.section.embedded.begin punctuation.definition.string
//                 ^ string.unquoted.heredoc meta.embedded.sql punctuation.section.embedded.begin keyword.operator.heredoc
string
^ string.unquoted.heredoc meta.embedded.sql text.sql
SQL;
// <- string.unquoted.heredoc keyword.operator.heredoc punctuation.section.embedded.end

$heredoc___js = <<<JAVASCRIPT
//              ^ string.unquoted.heredoc meta.embedded.js punctuation.section.embedded.begin punctuation.definition.string
//                 ^ string.unquoted.heredoc meta.embedded.js punctuation.section.embedded.begin keyword.operator.heredoc
string
^ string.unquoted.heredoc meta.embedded.js text.js
JAVASCRIPT;
// <- string.unquoted.heredoc keyword.operator.heredoc punctuation.section.embedded.end

$heredoc_json = <<<JSON
//              ^ string.unquoted.heredoc meta.embedded.json punctuation.section.embedded.begin punctuation.definition.string
//                 ^ string.unquoted.heredoc meta.embedded.json punctuation.section.embedded.begin keyword.operator.heredoc
string
^ string.unquoted.heredoc meta.embedded.json text.json
JSON;
// <- string.unquoted.heredoc keyword.operator.heredoc punctuation.section.embedded.end

$nowdoc_syntax = <<<'EOT'
//               ^^^ string.unquoted.heredoc string.unquoted.nowdoc punctuation.definition.string
//                   ^^^ string.unquoted.heredoc string.unquoted.nowdoc keyword.operator.heredoc
//                  ^ -keyword
//                  ^ -punctuation
//                  ^ string.unquoted.heredoc string.unquoted.nowdoc
//                      ^ -keyword
//                      ^ -punctuation
//                      ^ string.unquoted.heredoc string.unquoted.nowdoc
string
// ^ string.unquoted.heredoc string.unquoted.nowdoc
EOT;
// <- string.unquoted.heredoc keyword.operator.heredoc


$heredoc = <<<EOT
Example of string
// ^ string.unquoted.heredoc
spanning multiple lines
// ^ string.unquoted.heredoc
using heredoc syntax.
// ^ string.unquoted.heredoc
EOT;

$heredoc_variable_expansion = <<<EOT
My name is "$name". I am printing some $foo->foo.
//          ^^^^^ string.unquoted.heredoc variable.other
//          ^ string.unquoted.heredoc variable.other punctuation.definition.variable
//                                     ^^^^ string.unquoted.heredoc variable.other
//                                           ^^^ string.unquoted.heredoc variable.other.property
//                                     ^ string.unquoted.heredoc variable.other punctuation.definition.variable
//                                         ^^ string.unquoted.heredoc keyword.operator.class

Now, I am printing some {$foo->bar[1]}.
//                       ^^^^ string.unquoted.heredoc variable.other
//                             ^^^ string.unquoted.heredoc variable.other.property
//                      ^ string.unquoted.heredoc  punctuation.definition.variable
//                                   ^ string.unquoted.heredoc punctuation.definition.variable
//                       ^ string.unquoted.heredoc variable.other punctuation.definition.variable
//                           ^^ string.unquoted.heredoc keyword.operator.class
EOT;


/**
 * Heredoc in arguments example
 */

var_dump(array(<<<EOD
//             ^^^ string.unquoted.heredoc punctuation.definition.string
//                ^^^ string.unquoted.heredoc keyword.operator.heredoc
foobar!
// ^ string.unquoted.heredoc
EOD
// <- string.unquoted.heredoc keyword.operator.heredoc
//^ string.unquoted.heredoc keyword.operator.heredoc
));

/**
 * Using Heredoc to initialize static values
 */

function foo()
{
    static $bar = <<<LABEL
//                 ^ string.unquoted.heredoc punctuation.definition.string
//                     ^ string.unquoted.heredoc keyword.operator.heredoc
Nothing in here...
LABEL;
// <- string.unquoted.heredoc keyword.operator.heredoc
}

class foo
{
    const BAR = <<<FOOBAR
//               ^ string.unquoted.heredoc punctuation.definition.string
//                   ^ string.unquoted.heredoc keyword.operator.heredoc
FOOBAR;
// <- string.unquoted.heredoc keyword.operator.heredoc

    public $baz = <<<FOOBAR
//                 ^ string.unquoted.heredoc punctuation.definition.string
//                      ^ string.unquoted.heredoc keyword.operator.heredoc
Property example
FOOBAR;
// <- string.unquoted.heredoc keyword.operator.heredoc
}
