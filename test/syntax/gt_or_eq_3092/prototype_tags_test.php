--TEST--
PHTML echo statements
--SYNTAX--
Packages/php-grammar/PHP.sublime-syntax
--FILE--
<!Doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Test</title>
    </head>
    <body>
    <?php

    echo 'string';

    ?>

    <?php echo 'string'; ?>

    <?= 'string'; ?>

    <?=

    'string';

    ?>

    <?php

    ?>
    </body>
</html>
--EXPECT--
embedding.php text.html.basic meta.tag.sgml.html punctuation.definition.tag.html
embedding.php text.html.basic meta.tag.sgml.html punctuation.definition.tag.html
embedding.php text.html.basic meta.tag.sgml.html meta.tag.sgml.doctype.html
embedding.php text.html.basic meta.tag.sgml.html meta.tag.sgml.doctype.html
embedding.php text.html.basic meta.tag.sgml.html meta.tag.sgml.doctype.html
embedding.php text.html.basic meta.tag.sgml.html meta.tag.sgml.doctype.html
embedding.php text.html.basic meta.tag.sgml.html meta.tag.sgml.doctype.html
embedding.php text.html.basic meta.tag.sgml.html meta.tag.sgml.doctype.html
embedding.php text.html.basic meta.tag.sgml.html meta.tag.sgml.doctype.html
embedding.php text.html.basic meta.tag.sgml.html meta.tag.sgml.doctype.html
embedding.php text.html.basic meta.tag.sgml.html meta.tag.sgml.doctype.html
embedding.php text.html.basic meta.tag.sgml.html meta.tag.sgml.doctype.html
embedding.php text.html.basic meta.tag.sgml.html meta.tag.sgml.doctype.html
embedding.php text.html.basic meta.tag.sgml.html meta.tag.sgml.doctype.html
embedding.php text.html.basic meta.tag.sgml.html
embedding.php text.html.basic
embedding.php text.html.basic meta.tag.structure.any.html punctuation.definition.tag.begin.html
embedding.php text.html.basic meta.tag.structure.any.html entity.name.tag.structure.any.html
embedding.php text.html.basic meta.tag.structure.any.html entity.name.tag.structure.any.html
embedding.php text.html.basic meta.tag.structure.any.html entity.name.tag.structure.any.html
embedding.php text.html.basic meta.tag.structure.any.html entity.name.tag.structure.any.html
embedding.php text.html.basic meta.tag.structure.any.html
embedding.php text.html.basic meta.tag.structure.any.html entity.other.attribute-name.html
embedding.php text.html.basic meta.tag.structure.any.html entity.other.attribute-name.html
embedding.php text.html.basic meta.tag.structure.any.html entity.other.attribute-name.html
embedding.php text.html.basic meta.tag.structure.any.html entity.other.attribute-name.html
embedding.php text.html.basic meta.tag.structure.any.html
embedding.php text.html.basic meta.tag.structure.any.html string.quoted.double.html punctuation.definition.string.begin.html
embedding.php text.html.basic meta.tag.structure.any.html string.quoted.double.html
embedding.php text.html.basic meta.tag.structure.any.html string.quoted.double.html
embedding.php text.html.basic meta.tag.structure.any.html string.quoted.double.html punctuation.definition.string.end.html
embedding.php text.html.basic meta.tag.structure.any.html punctuation.definition.tag.end.html
embedding.php text.html.basic
embedding.php text.html.basic
embedding.php text.html.basic
embedding.php text.html.basic
embedding.php text.html.basic
embedding.php text.html.basic meta.tag.structure.any.html punctuation.definition.tag.begin.html
embedding.php text.html.basic meta.tag.structure.any.html entity.name.tag.structure.any.html
embedding.php text.html.basic meta.tag.structure.any.html entity.name.tag.structure.any.html
embedding.php text.html.basic meta.tag.structure.any.html entity.name.tag.structure.any.html
embedding.php text.html.basic meta.tag.structure.any.html entity.name.tag.structure.any.html
embedding.php text.html.basic meta.tag.structure.any.html punctuation.definition.tag.end.html
embedding.php text.html.basic
embedding.php text.html.basic
embedding.php text.html.basic
embedding.php text.html.basic
embedding.php text.html.basic
embedding.php text.html.basic
embedding.php text.html.basic
embedding.php text.html.basic
embedding.php text.html.basic
embedding.php text.html.basic meta.tag.inline.any.html punctuation.definition.tag.begin.html
embedding.php text.html.basic meta.tag.inline.any.html entity.name.tag.inline.any.html
embedding.php text.html.basic meta.tag.inline.any.html entity.name.tag.inline.any.html
embedding.php text.html.basic meta.tag.inline.any.html entity.name.tag.inline.any.html
embedding.php text.html.basic meta.tag.inline.any.html entity.name.tag.inline.any.html
embedding.php text.html.basic meta.tag.inline.any.html
embedding.php text.html.basic meta.tag.inline.any.html entity.other.attribute-name.html
embedding.php text.html.basic meta.tag.inline.any.html entity.other.attribute-name.html
embedding.php text.html.basic meta.tag.inline.any.html entity.other.attribute-name.html
embedding.php text.html.basic meta.tag.inline.any.html entity.other.attribute-name.html
embedding.php text.html.basic meta.tag.inline.any.html entity.other.attribute-name.html
embedding.php text.html.basic meta.tag.inline.any.html entity.other.attribute-name.html
embedding.php text.html.basic meta.tag.inline.any.html entity.other.attribute-name.html
embedding.php text.html.basic meta.tag.inline.any.html
embedding.php text.html.basic meta.tag.inline.any.html string.quoted.double.html punctuation.definition.string.begin.html
embedding.php text.html.basic meta.tag.inline.any.html string.quoted.double.html
embedding.php text.html.basic meta.tag.inline.any.html string.quoted.double.html
embedding.php text.html.basic meta.tag.inline.any.html string.quoted.double.html
embedding.php text.html.basic meta.tag.inline.any.html string.quoted.double.html
embedding.php text.html.basic meta.tag.inline.any.html string.quoted.double.html
embedding.php text.html.basic meta.tag.inline.any.html string.quoted.double.html punctuation.definition.string.end.html
embedding.php text.html.basic meta.tag.inline.any.html punctuation.definition.tag.end.html
embedding.php text.html.basic
embedding.php text.html.basic
embedding.php text.html.basic
embedding.php text.html.basic
embedding.php text.html.basic
embedding.php text.html.basic
embedding.php text.html.basic
embedding.php text.html.basic
embedding.php text.html.basic
embedding.php text.html.basic meta.tag.inline.any.html punctuation.definition.tag.begin.html
embedding.php text.html.basic meta.tag.inline.any.html entity.name.tag.inline.any.html
embedding.php text.html.basic meta.tag.inline.any.html entity.name.tag.inline.any.html
embedding.php text.html.basic meta.tag.inline.any.html entity.name.tag.inline.any.html
embedding.php text.html.basic meta.tag.inline.any.html entity.name.tag.inline.any.html
embedding.php text.html.basic meta.tag.inline.any.html entity.name.tag.inline.any.html
embedding.php text.html.basic meta.tag.inline.any.html punctuation.definition.tag.end.html
embedding.php text.html.basic
embedding.php text.html.basic
embedding.php text.html.basic
embedding.php text.html.basic
embedding.php text.html.basic meta.tag.inline.any.html punctuation.definition.tag.begin.html
embedding.php text.html.basic meta.tag.inline.any.html punctuation.definition.tag.begin.html
embedding.php text.html.basic meta.tag.inline.any.html entity.name.tag.inline.any.html
embedding.php text.html.basic meta.tag.inline.any.html entity.name.tag.inline.any.html
embedding.php text.html.basic meta.tag.inline.any.html entity.name.tag.inline.any.html
embedding.php text.html.basic meta.tag.inline.any.html entity.name.tag.inline.any.html
embedding.php text.html.basic meta.tag.inline.any.html entity.name.tag.inline.any.html
embedding.php text.html.basic meta.tag.inline.any.html punctuation.definition.tag.end.html
embedding.php text.html.basic
embedding.php text.html.basic
embedding.php text.html.basic
embedding.php text.html.basic
embedding.php text.html.basic
embedding.php text.html.basic meta.tag.structure.any.html punctuation.definition.tag.begin.html
embedding.php text.html.basic meta.tag.structure.any.html punctuation.definition.tag.begin.html
embedding.php text.html.basic meta.tag.structure.any.html entity.name.tag.structure.any.html
embedding.php text.html.basic meta.tag.structure.any.html entity.name.tag.structure.any.html
embedding.php text.html.basic meta.tag.structure.any.html entity.name.tag.structure.any.html
embedding.php text.html.basic meta.tag.structure.any.html entity.name.tag.structure.any.html
embedding.php text.html.basic meta.tag.structure.any.html punctuation.definition.tag.end.html
embedding.php text.html.basic
embedding.php text.html.basic
embedding.php text.html.basic
embedding.php text.html.basic
embedding.php text.html.basic
embedding.php text.html.basic meta.tag.structure.any.html punctuation.definition.tag.begin.html
embedding.php text.html.basic meta.tag.structure.any.html entity.name.tag.structure.any.html
embedding.php text.html.basic meta.tag.structure.any.html entity.name.tag.structure.any.html
embedding.php text.html.basic meta.tag.structure.any.html entity.name.tag.structure.any.html
embedding.php text.html.basic meta.tag.structure.any.html entity.name.tag.structure.any.html
embedding.php text.html.basic meta.tag.structure.any.html punctuation.definition.tag.end.html
embedding.php text.html.basic
embedding.php text.html.basic punctuation.whitespace.embedded.leading.php
embedding.php text.html.basic punctuation.whitespace.embedded.leading.php
embedding.php text.html.basic punctuation.whitespace.embedded.leading.php
embedding.php text.html.basic punctuation.whitespace.embedded.leading.php
embedding.php text.html.basic meta.embedded.block.php punctuation.section.embedded.begin.php
embedding.php text.html.basic meta.embedded.block.php punctuation.section.embedded.begin.php
embedding.php text.html.basic meta.embedded.block.php punctuation.section.embedded.begin.php
embedding.php text.html.basic meta.embedded.block.php punctuation.section.embedded.begin.php
embedding.php text.html.basic meta.embedded.block.php punctuation.section.embedded.begin.php
embedding.php text.html.basic meta.embedded.block.php source.php
embedding.php text.html.basic meta.embedded.block.php source.php
embedding.php text.html.basic meta.embedded.block.php source.php
embedding.php text.html.basic meta.embedded.block.php source.php
embedding.php text.html.basic meta.embedded.block.php source.php
embedding.php text.html.basic meta.embedded.block.php source.php
embedding.php text.html.basic meta.embedded.block.php source.php support.function.construct.php
embedding.php text.html.basic meta.embedded.block.php source.php support.function.construct.php
embedding.php text.html.basic meta.embedded.block.php source.php support.function.construct.php
embedding.php text.html.basic meta.embedded.block.php source.php support.function.construct.php
embedding.php text.html.basic meta.embedded.block.php source.php
embedding.php text.html.basic meta.embedded.block.php source.php string.quoted.single.php punctuation.definition.string.begin.php
embedding.php text.html.basic meta.embedded.block.php source.php string.quoted.single.php meta.string-contents.quoted.single.php
embedding.php text.html.basic meta.embedded.block.php source.php string.quoted.single.php meta.string-contents.quoted.single.php
embedding.php text.html.basic meta.embedded.block.php source.php string.quoted.single.php meta.string-contents.quoted.single.php
embedding.php text.html.basic meta.embedded.block.php source.php string.quoted.single.php meta.string-contents.quoted.single.php
embedding.php text.html.basic meta.embedded.block.php source.php string.quoted.single.php meta.string-contents.quoted.single.php
embedding.php text.html.basic meta.embedded.block.php source.php string.quoted.single.php meta.string-contents.quoted.single.php
embedding.php text.html.basic meta.embedded.block.php source.php string.quoted.single.php punctuation.definition.string.end.php
embedding.php text.html.basic meta.embedded.block.php source.php punctuation.terminator.expression.php
embedding.php text.html.basic meta.embedded.block.php source.php
embedding.php text.html.basic meta.embedded.block.php source.php
embedding.php text.html.basic meta.embedded.block.php source.php
embedding.php text.html.basic meta.embedded.block.php source.php
embedding.php text.html.basic meta.embedded.block.php source.php
embedding.php text.html.basic meta.embedded.block.php source.php
embedding.php text.html.basic meta.embedded.block.php punctuation.section.embedded.end.php
embedding.php text.html.basic meta.embedded.block.php punctuation.section.embedded.end.php
embedding.php text.html.basic punctuation.whitespace.embedded.trailing.php
embedding.php text.html.basic
embedding.php text.html.basic punctuation.whitespace.embedded.leading.php
embedding.php text.html.basic punctuation.whitespace.embedded.leading.php
embedding.php text.html.basic punctuation.whitespace.embedded.leading.php
embedding.php text.html.basic punctuation.whitespace.embedded.leading.php
embedding.php text.html.basic meta.embedded.block.php punctuation.section.embedded.begin.php
embedding.php text.html.basic meta.embedded.block.php punctuation.section.embedded.begin.php
embedding.php text.html.basic meta.embedded.block.php punctuation.section.embedded.begin.php
embedding.php text.html.basic meta.embedded.block.php punctuation.section.embedded.begin.php
embedding.php text.html.basic meta.embedded.block.php punctuation.section.embedded.begin.php
embedding.php text.html.basic meta.embedded.block.php source.php
embedding.php text.html.basic meta.embedded.block.php source.php support.function.construct.php
embedding.php text.html.basic meta.embedded.block.php source.php support.function.construct.php
embedding.php text.html.basic meta.embedded.block.php source.php support.function.construct.php
embedding.php text.html.basic meta.embedded.block.php source.php support.function.construct.php
embedding.php text.html.basic meta.embedded.block.php source.php
embedding.php text.html.basic meta.embedded.block.php source.php string.quoted.single.php punctuation.definition.string.begin.php
embedding.php text.html.basic meta.embedded.block.php source.php string.quoted.single.php meta.string-contents.quoted.single.php
embedding.php text.html.basic meta.embedded.block.php source.php string.quoted.single.php meta.string-contents.quoted.single.php
embedding.php text.html.basic meta.embedded.block.php source.php string.quoted.single.php meta.string-contents.quoted.single.php
embedding.php text.html.basic meta.embedded.block.php source.php string.quoted.single.php meta.string-contents.quoted.single.php
embedding.php text.html.basic meta.embedded.block.php source.php string.quoted.single.php meta.string-contents.quoted.single.php
embedding.php text.html.basic meta.embedded.block.php source.php string.quoted.single.php meta.string-contents.quoted.single.php
embedding.php text.html.basic meta.embedded.block.php source.php string.quoted.single.php punctuation.definition.string.end.php
embedding.php text.html.basic meta.embedded.block.php source.php punctuation.terminator.expression.php
embedding.php text.html.basic meta.embedded.block.php source.php
embedding.php text.html.basic meta.embedded.block.php punctuation.section.embedded.end.php
embedding.php text.html.basic meta.embedded.block.php punctuation.section.embedded.end.php
embedding.php text.html.basic punctuation.whitespace.embedded.trailing.php
embedding.php text.html.basic
embedding.php text.html.basic punctuation.whitespace.embedded.leading.php
embedding.php text.html.basic punctuation.whitespace.embedded.leading.php
embedding.php text.html.basic punctuation.whitespace.embedded.leading.php
embedding.php text.html.basic punctuation.whitespace.embedded.leading.php
embedding.php text.html.basic meta.embedded.block.php punctuation.section.embedded.begin.php
embedding.php text.html.basic meta.embedded.block.php punctuation.section.embedded.begin.php
embedding.php text.html.basic meta.embedded.block.php punctuation.section.embedded.begin.php
embedding.php text.html.basic meta.embedded.block.php source.php
embedding.php text.html.basic meta.embedded.block.php source.php string.quoted.single.php punctuation.definition.string.begin.php
embedding.php text.html.basic meta.embedded.block.php source.php string.quoted.single.php meta.string-contents.quoted.single.php
embedding.php text.html.basic meta.embedded.block.php source.php string.quoted.single.php meta.string-contents.quoted.single.php
embedding.php text.html.basic meta.embedded.block.php source.php string.quoted.single.php meta.string-contents.quoted.single.php
embedding.php text.html.basic meta.embedded.block.php source.php string.quoted.single.php meta.string-contents.quoted.single.php
embedding.php text.html.basic meta.embedded.block.php source.php string.quoted.single.php meta.string-contents.quoted.single.php
embedding.php text.html.basic meta.embedded.block.php source.php string.quoted.single.php meta.string-contents.quoted.single.php
embedding.php text.html.basic meta.embedded.block.php source.php string.quoted.single.php punctuation.definition.string.end.php
embedding.php text.html.basic meta.embedded.block.php source.php punctuation.terminator.expression.php
embedding.php text.html.basic meta.embedded.block.php source.php
embedding.php text.html.basic meta.embedded.block.php punctuation.section.embedded.end.php
embedding.php text.html.basic meta.embedded.block.php punctuation.section.embedded.end.php
embedding.php text.html.basic punctuation.whitespace.embedded.trailing.php
embedding.php text.html.basic
embedding.php text.html.basic punctuation.whitespace.embedded.leading.php
embedding.php text.html.basic punctuation.whitespace.embedded.leading.php
embedding.php text.html.basic punctuation.whitespace.embedded.leading.php
embedding.php text.html.basic punctuation.whitespace.embedded.leading.php
embedding.php text.html.basic meta.embedded.block.php punctuation.section.embedded.begin.php
embedding.php text.html.basic meta.embedded.block.php punctuation.section.embedded.begin.php
embedding.php text.html.basic meta.embedded.block.php punctuation.section.embedded.begin.php
embedding.php text.html.basic meta.embedded.block.php source.php
embedding.php text.html.basic meta.embedded.block.php source.php
embedding.php text.html.basic meta.embedded.block.php source.php
embedding.php text.html.basic meta.embedded.block.php source.php
embedding.php text.html.basic meta.embedded.block.php source.php
embedding.php text.html.basic meta.embedded.block.php source.php
embedding.php text.html.basic meta.embedded.block.php source.php string.quoted.single.php punctuation.definition.string.begin.php
embedding.php text.html.basic meta.embedded.block.php source.php string.quoted.single.php meta.string-contents.quoted.single.php
embedding.php text.html.basic meta.embedded.block.php source.php string.quoted.single.php meta.string-contents.quoted.single.php
embedding.php text.html.basic meta.embedded.block.php source.php string.quoted.single.php meta.string-contents.quoted.single.php
embedding.php text.html.basic meta.embedded.block.php source.php string.quoted.single.php meta.string-contents.quoted.single.php
embedding.php text.html.basic meta.embedded.block.php source.php string.quoted.single.php meta.string-contents.quoted.single.php
embedding.php text.html.basic meta.embedded.block.php source.php string.quoted.single.php meta.string-contents.quoted.single.php
embedding.php text.html.basic meta.embedded.block.php source.php string.quoted.single.php punctuation.definition.string.end.php
embedding.php text.html.basic meta.embedded.block.php source.php punctuation.terminator.expression.php
embedding.php text.html.basic meta.embedded.block.php source.php
embedding.php text.html.basic meta.embedded.block.php source.php
embedding.php text.html.basic meta.embedded.block.php source.php
embedding.php text.html.basic meta.embedded.block.php source.php
embedding.php text.html.basic meta.embedded.block.php source.php
embedding.php text.html.basic meta.embedded.block.php source.php
embedding.php text.html.basic meta.embedded.block.php punctuation.section.embedded.end.php
embedding.php text.html.basic meta.embedded.block.php punctuation.section.embedded.end.php
embedding.php text.html.basic punctuation.whitespace.embedded.trailing.php
embedding.php text.html.basic
embedding.php text.html.basic punctuation.whitespace.embedded.leading.php
embedding.php text.html.basic punctuation.whitespace.embedded.leading.php
embedding.php text.html.basic punctuation.whitespace.embedded.leading.php
embedding.php text.html.basic punctuation.whitespace.embedded.leading.php
embedding.php text.html.basic meta.embedded.block.php punctuation.section.embedded.begin.php
embedding.php text.html.basic meta.embedded.block.php punctuation.section.embedded.begin.php
embedding.php text.html.basic meta.embedded.block.php punctuation.section.embedded.begin.php
embedding.php text.html.basic meta.embedded.block.php punctuation.section.embedded.begin.php
embedding.php text.html.basic meta.embedded.block.php punctuation.section.embedded.begin.php
embedding.php text.html.basic meta.embedded.block.php source.php
embedding.php text.html.basic meta.embedded.block.php source.php
embedding.php text.html.basic meta.embedded.block.php source.php
embedding.php text.html.basic meta.embedded.block.php source.php
embedding.php text.html.basic meta.embedded.block.php source.php
embedding.php text.html.basic meta.embedded.block.php source.php
embedding.php text.html.basic meta.embedded.block.php punctuation.section.embedded.end.php
embedding.php text.html.basic meta.embedded.block.php punctuation.section.embedded.end.php
embedding.php text.html.basic punctuation.whitespace.embedded.trailing.php
embedding.php text.html.basic
embedding.php text.html.basic
embedding.php text.html.basic
embedding.php text.html.basic
embedding.php text.html.basic meta.tag.structure.any.html punctuation.definition.tag.begin.html
embedding.php text.html.basic meta.tag.structure.any.html punctuation.definition.tag.begin.html
embedding.php text.html.basic meta.tag.structure.any.html entity.name.tag.structure.any.html
embedding.php text.html.basic meta.tag.structure.any.html entity.name.tag.structure.any.html
embedding.php text.html.basic meta.tag.structure.any.html entity.name.tag.structure.any.html
embedding.php text.html.basic meta.tag.structure.any.html entity.name.tag.structure.any.html
embedding.php text.html.basic meta.tag.structure.any.html punctuation.definition.tag.end.html
embedding.php text.html.basic
embedding.php text.html.basic meta.tag.structure.any.html punctuation.definition.tag.begin.html
embedding.php text.html.basic meta.tag.structure.any.html punctuation.definition.tag.begin.html
embedding.php text.html.basic meta.tag.structure.any.html entity.name.tag.structure.any.html
embedding.php text.html.basic meta.tag.structure.any.html entity.name.tag.structure.any.html
embedding.php text.html.basic meta.tag.structure.any.html entity.name.tag.structure.any.html
embedding.php text.html.basic meta.tag.structure.any.html entity.name.tag.structure.any.html
embedding.php text.html.basic meta.tag.structure.any.html punctuation.definition.tag.end.html
