// SYNTAX TEST "Packages/php-grammar/PHP.tmLanguage"
<p><?php echo 'xyz'; ?></p>
//<- -source.php
// <- -source.php
//^ -source.php
// ^ -source.php
//  ^ -source.php
//   ^ -source.php
//    ^ -source.php
//     ^ -source.php
//                   ^ -source.php
//                    ^ -source.php
//                     ^ -source.php
//                      ^ -source.php
//                       ^ -source.php
//                        ^ -source.php

<p><?php echo 'xyz'; ?></p>
// ^ embedding.php punctuation.section.embedded.begin
//  ^ embedding.php punctuation.section.embedded.begin
//   ^ embedding.php punctuation.section.embedded.begin
//    ^ embedding.php punctuation.section.embedded.begin
//     ^ embedding.php punctuation.section.embedded.begin
//       ^ source.php support.function.construct.output
//        ^ source.php support.function.construct.output
//         ^ source.php support.function.construct.output
//          ^ source.php support.function.construct.output
//           ^ source.php -support.function.construct.output
//                   ^ embedding.php punctuation.section.embedded.end
//                    ^ embedding.php punctuation.section.embedded.end
