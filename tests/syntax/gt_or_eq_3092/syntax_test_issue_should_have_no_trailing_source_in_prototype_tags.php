// SYNTAX TEST "Packages/php-grammar/PHP.tmLanguage"
<!DOCTYPE html>
<html lang="en">
    <head>
 <meta charset="utf-8">
        <title>Test</title>
    </head>
    <body>
    <?php

    echo 'string';

    ?>
//  ^ embedding.php text.html.basic meta.embedded.block.php punctuation.section.embedded.end.php
//  ^ -embedding.php text.html.basic meta.embedded.block.php punctuation.section.embedded.end.php source.php
//   ^ embedding.php text.html.basic meta.embedded.block.php punctuation.section.embedded.end.php
//   ^ -embedding.php text.html.basic meta.embedded.block.php punctuation.section.embedded.end.php source.php

    <?php echo 'string'; ?>
//                       ^ embedding.php text.html.basic meta.embedded.block.php punctuation.section.embedded.end.php
//                       ^ -embedding.php text.html.basic meta.embedded.block.php punctuation.section.embedded.end.php source.php
//                        ^ embedding.php text.html.basic meta.embedded.block.php punctuation.section.embedded.end.php
//                        ^ -embedding.php text.html.basic meta.embedded.block.php punctuation.section.embedded.end.php source.php

    <?= 'string'; ?>
//                ^ embedding.php text.html.basic meta.embedded.block.php punctuation.section.embedded.end.php
//                ^ -embedding.php text.html.basic meta.embedded.block.php punctuation.section.embedded.end.php source.php
//                 ^ embedding.php text.html.basic meta.embedded.block.php punctuation.section.embedded.end.php
//                 ^ -embedding.php text.html.basic meta.embedded.block.php punctuation.section.embedded.end.php source.php

    <?=

    'string';

    ?>
//  ^ embedding.php text.html.basic meta.embedded.block.php punctuation.section.embedded.end.php
//  ^ -embedding.php text.html.basic meta.embedded.block.php punctuation.section.embedded.end.php source.php
//   ^ embedding.php text.html.basic meta.embedded.block.php punctuation.section.embedded.end.php
//   ^ -embedding.php text.html.basic meta.embedded.block.php punctuation.section.embedded.end.php source.php

    <?php

    ?>
//  ^ embedding.php text.html.basic meta.embedded.block.php punctuation.section.embedded.end.php
//  ^ -embedding.php text.html.basic meta.embedded.block.php punctuation.section.embedded.end.php source.php
//   ^ embedding.php text.html.basic meta.embedded.block.php punctuation.section.embedded.end.php
//   ^ -embedding.php text.html.basic meta.embedded.block.php punctuation.section.embedded.end.php source.php
    </body>
</html>
