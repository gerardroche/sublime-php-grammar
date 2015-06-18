--TEST--
PHTML echo statements
--SYNTAX--
Packages/php-grammar/PHP.sublime-syntax
--FILE--
<i><?php echo 'xyz'; ?></i>
<i><?= 'xyz'; ?></i>
<i>
<?php
echo 'xyz';
?>
</i>
--EXPECT--
embedding.php text.html.basic meta.tag.inline.any.html punctuation.definition.tag.begin.html
embedding.php text.html.basic meta.tag.inline.any.html entity.name.tag.inline.any.html
embedding.php text.html.basic meta.tag.inline.any.html punctuation.definition.tag.end.html
embedding.php text.html.basic meta.embedded.line.php punctuation.section.embedded.begin.php
embedding.php text.html.basic meta.embedded.line.php punctuation.section.embedded.begin.php
embedding.php text.html.basic meta.embedded.line.php punctuation.section.embedded.begin.php
embedding.php text.html.basic meta.embedded.line.php punctuation.section.embedded.begin.php
embedding.php text.html.basic meta.embedded.line.php punctuation.section.embedded.begin.php
embedding.php text.html.basic meta.embedded.line.php source.php
embedding.php text.html.basic meta.embedded.line.php source.php support.function.construct.php
embedding.php text.html.basic meta.embedded.line.php source.php support.function.construct.php
embedding.php text.html.basic meta.embedded.line.php source.php support.function.construct.php
embedding.php text.html.basic meta.embedded.line.php source.php support.function.construct.php
embedding.php text.html.basic meta.embedded.line.php source.php
embedding.php text.html.basic meta.embedded.line.php source.php string.quoted.single.php punctuation.definition.string.begin.php
embedding.php text.html.basic meta.embedded.line.php source.php string.quoted.single.php meta.string-contents.quoted.single.php
embedding.php text.html.basic meta.embedded.line.php source.php string.quoted.single.php meta.string-contents.quoted.single.php
embedding.php text.html.basic meta.embedded.line.php source.php string.quoted.single.php meta.string-contents.quoted.single.php
embedding.php text.html.basic meta.embedded.line.php source.php string.quoted.single.php punctuation.definition.string.end.php
embedding.php text.html.basic meta.embedded.line.php source.php punctuation.terminator.expression.php
embedding.php text.html.basic meta.embedded.line.php source.php
embedding.php text.html.basic meta.embedded.line.php punctuation.section.embedded.end.php
embedding.php text.html.basic meta.embedded.line.php punctuation.section.embedded.end.php
embedding.php text.html.basic meta.tag.inline.any.html punctuation.definition.tag.begin.html
embedding.php text.html.basic meta.tag.inline.any.html punctuation.definition.tag.begin.html
embedding.php text.html.basic meta.tag.inline.any.html entity.name.tag.inline.any.html
embedding.php text.html.basic meta.tag.inline.any.html punctuation.definition.tag.end.html
embedding.php text.html.basic
embedding.php text.html.basic meta.tag.inline.any.html punctuation.definition.tag.begin.html
embedding.php text.html.basic meta.tag.inline.any.html entity.name.tag.inline.any.html
embedding.php text.html.basic meta.tag.inline.any.html punctuation.definition.tag.end.html
embedding.php text.html.basic meta.embedded.line.php punctuation.section.embedded.begin.php
embedding.php text.html.basic meta.embedded.line.php punctuation.section.embedded.begin.php
embedding.php text.html.basic meta.embedded.line.php punctuation.section.embedded.begin.php
embedding.php text.html.basic meta.embedded.line.php source.php
embedding.php text.html.basic meta.embedded.line.php source.php string.quoted.single.php punctuation.definition.string.begin.php
embedding.php text.html.basic meta.embedded.line.php source.php string.quoted.single.php meta.string-contents.quoted.single.php
embedding.php text.html.basic meta.embedded.line.php source.php string.quoted.single.php meta.string-contents.quoted.single.php
embedding.php text.html.basic meta.embedded.line.php source.php string.quoted.single.php meta.string-contents.quoted.single.php
embedding.php text.html.basic meta.embedded.line.php source.php string.quoted.single.php punctuation.definition.string.end.php
embedding.php text.html.basic meta.embedded.line.php source.php punctuation.terminator.expression.php
embedding.php text.html.basic meta.embedded.line.php source.php
embedding.php text.html.basic meta.embedded.line.php punctuation.section.embedded.end.php
embedding.php text.html.basic meta.embedded.line.php punctuation.section.embedded.end.php
embedding.php text.html.basic meta.tag.inline.any.html punctuation.definition.tag.begin.html
embedding.php text.html.basic meta.tag.inline.any.html punctuation.definition.tag.begin.html
embedding.php text.html.basic meta.tag.inline.any.html entity.name.tag.inline.any.html
embedding.php text.html.basic meta.tag.inline.any.html punctuation.definition.tag.end.html
embedding.php text.html.basic
embedding.php text.html.basic meta.tag.inline.any.html punctuation.definition.tag.begin.html
embedding.php text.html.basic meta.tag.inline.any.html entity.name.tag.inline.any.html
embedding.php text.html.basic meta.tag.inline.any.html punctuation.definition.tag.end.html
embedding.php text.html.basic
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
embedding.php text.html.basic meta.embedded.block.php source.php string.quoted.single.php punctuation.definition.string.end.php
embedding.php text.html.basic meta.embedded.block.php source.php punctuation.terminator.expression.php
embedding.php text.html.basic meta.embedded.block.php source.php
embedding.php text.html.basic meta.embedded.block.php punctuation.section.embedded.end.php
embedding.php text.html.basic meta.embedded.block.php punctuation.section.embedded.end.php
embedding.php text.html.basic punctuation.whitespace.embedded.trailing.php
embedding.php text.html.basic meta.tag.inline.any.html punctuation.definition.tag.begin.html
embedding.php text.html.basic meta.tag.inline.any.html punctuation.definition.tag.begin.html
embedding.php text.html.basic meta.tag.inline.any.html entity.name.tag.inline.any.html
embedding.php text.html.basic meta.tag.inline.any.html punctuation.definition.tag.end.html
