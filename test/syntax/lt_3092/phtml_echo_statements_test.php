--TEST--
PHTML echo statements
--SYNTAX--
Packages/HTML/HTML.tmLanguage
--FILE--
<i><?php echo 'xyz'; ?></i>
<i><?= 'xyz'; ?></i>
<i>
<?php
echo 'xyz';
?>
</i>
--EXPECT--
text.html.basic meta.tag.inline.any.html punctuation.definition.tag.begin.html
text.html.basic meta.tag.inline.any.html entity.name.tag.inline.any.html
text.html.basic meta.tag.inline.any.html punctuation.definition.tag.end.html
text.html.basic source.php.embedded.line.html punctuation.section.embedded.begin.php
text.html.basic source.php.embedded.line.html punctuation.section.embedded.begin.php
text.html.basic source.php.embedded.line.html punctuation.section.embedded.begin.php
text.html.basic source.php.embedded.line.html punctuation.section.embedded.begin.php
text.html.basic source.php.embedded.line.html punctuation.section.embedded.begin.php
text.html.basic source.php.embedded.line.html
text.html.basic source.php.embedded.line.html support.function.construct.php
text.html.basic source.php.embedded.line.html support.function.construct.php
text.html.basic source.php.embedded.line.html support.function.construct.php
text.html.basic source.php.embedded.line.html support.function.construct.php
text.html.basic source.php.embedded.line.html
text.html.basic source.php.embedded.line.html string.quoted.single.php punctuation.definition.string.begin.php
text.html.basic source.php.embedded.line.html string.quoted.single.php meta.string-contents.quoted.single.php
text.html.basic source.php.embedded.line.html string.quoted.single.php meta.string-contents.quoted.single.php
text.html.basic source.php.embedded.line.html string.quoted.single.php meta.string-contents.quoted.single.php
text.html.basic source.php.embedded.line.html string.quoted.single.php punctuation.definition.string.end.php
text.html.basic source.php.embedded.line.html punctuation.terminator.expression.php
text.html.basic source.php.embedded.line.html
text.html.basic source.php.embedded.line.html punctuation.section.embedded.end.php source.php
text.html.basic source.php.embedded.line.html punctuation.section.embedded.end.php
text.html.basic meta.tag.inline.any.html punctuation.definition.tag.begin.html
text.html.basic meta.tag.inline.any.html punctuation.definition.tag.begin.html
text.html.basic meta.tag.inline.any.html entity.name.tag.inline.any.html
text.html.basic meta.tag.inline.any.html punctuation.definition.tag.end.html
text.html.basic
text.html.basic meta.tag.inline.any.html punctuation.definition.tag.begin.html
text.html.basic meta.tag.inline.any.html entity.name.tag.inline.any.html
text.html.basic meta.tag.inline.any.html punctuation.definition.tag.end.html
text.html.basic source.php.embedded.line.html punctuation.section.embedded.begin.php
text.html.basic source.php.embedded.line.html punctuation.section.embedded.begin.php
text.html.basic source.php.embedded.line.html punctuation.section.embedded.begin.php
text.html.basic source.php.embedded.line.html
text.html.basic source.php.embedded.line.html string.quoted.single.php punctuation.definition.string.begin.php
text.html.basic source.php.embedded.line.html string.quoted.single.php meta.string-contents.quoted.single.php
text.html.basic source.php.embedded.line.html string.quoted.single.php meta.string-contents.quoted.single.php
text.html.basic source.php.embedded.line.html string.quoted.single.php meta.string-contents.quoted.single.php
text.html.basic source.php.embedded.line.html string.quoted.single.php punctuation.definition.string.end.php
text.html.basic source.php.embedded.line.html punctuation.terminator.expression.php
text.html.basic source.php.embedded.line.html
text.html.basic source.php.embedded.line.html punctuation.section.embedded.end.php source.php
text.html.basic source.php.embedded.line.html punctuation.section.embedded.end.php
text.html.basic meta.tag.inline.any.html punctuation.definition.tag.begin.html
text.html.basic meta.tag.inline.any.html punctuation.definition.tag.begin.html
text.html.basic meta.tag.inline.any.html entity.name.tag.inline.any.html
text.html.basic meta.tag.inline.any.html punctuation.definition.tag.end.html
text.html.basic
text.html.basic meta.tag.inline.any.html punctuation.definition.tag.begin.html
text.html.basic meta.tag.inline.any.html entity.name.tag.inline.any.html
text.html.basic meta.tag.inline.any.html punctuation.definition.tag.end.html
text.html.basic
text.html.basic source.php.embedded.block.html punctuation.section.embedded.begin.php
text.html.basic source.php.embedded.block.html punctuation.section.embedded.begin.php
text.html.basic source.php.embedded.block.html punctuation.section.embedded.begin.php
text.html.basic source.php.embedded.block.html punctuation.section.embedded.begin.php
text.html.basic source.php.embedded.block.html punctuation.section.embedded.begin.php
text.html.basic source.php.embedded.block.html
text.html.basic source.php.embedded.block.html support.function.construct.php
text.html.basic source.php.embedded.block.html support.function.construct.php
text.html.basic source.php.embedded.block.html support.function.construct.php
text.html.basic source.php.embedded.block.html support.function.construct.php
text.html.basic source.php.embedded.block.html
text.html.basic source.php.embedded.block.html string.quoted.single.php punctuation.definition.string.begin.php
text.html.basic source.php.embedded.block.html string.quoted.single.php meta.string-contents.quoted.single.php
text.html.basic source.php.embedded.block.html string.quoted.single.php meta.string-contents.quoted.single.php
text.html.basic source.php.embedded.block.html string.quoted.single.php meta.string-contents.quoted.single.php
text.html.basic source.php.embedded.block.html string.quoted.single.php punctuation.definition.string.end.php
text.html.basic source.php.embedded.block.html punctuation.terminator.expression.php
text.html.basic source.php.embedded.block.html
text.html.basic source.php.embedded.block.html punctuation.section.embedded.end.php source.php
text.html.basic source.php.embedded.block.html punctuation.section.embedded.end.php
text.html.basic punctuation.whitespace.embedded.trailing.php
text.html.basic meta.tag.inline.any.html punctuation.definition.tag.begin.html
text.html.basic meta.tag.inline.any.html punctuation.definition.tag.begin.html
text.html.basic meta.tag.inline.any.html entity.name.tag.inline.any.html
text.html.basic meta.tag.inline.any.html punctuation.definition.tag.end.html
