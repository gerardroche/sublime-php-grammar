// SYNTAX TEST "Packages/php-grammar/PHP.tmLanguage"
<?php

$x = array();
//   ^ meta.array.empty.php support.function.construct.php
//    ^ meta.array.empty.php support.function.construct.php
//     ^ meta.array.empty.php support.function.construct.php
//      ^ meta.array.empty.php support.function.construct.php
//       ^ meta.array.empty.php support.function.construct.php
//        ^ meta.array.empty.php punctuation.definition.array.begin.php
//         ^ meta.array.empty.php punctuation.definition.array.end.php

$x = [];
//   ^ meta.array.empty.php punctuation.definition.array.begin.php
//    ^ meta.array.empty.php punctuation.definition.array.end.php

$x = array( );
//   ^ meta.array.php support.function.construct.php
//    ^ meta.array.php support.function.construct.php
//     ^ meta.array.php support.function.construct.php
//      ^ meta.array.php support.function.construct.php
//       ^ meta.array.php support.function.construct.php
//        ^ meta.array.php punctuation.definition.array.begin.php
//         ^ meta.array.php
//          ^ meta.array.php punctuation.definition.array.end.php

$x = [ ];
//   ^ meta.array.php punctuation.definition.array.begin.php
//    ^ meta.array.php
//     ^ meta.array.php punctuation.definition.array.end.php

$x = array(
//   ^ meta.array.php support.function.construct.php
//    ^ meta.array.php support.function.construct.php
//     ^ meta.array.php support.function.construct.php
//      ^ meta.array.php support.function.construct.php
//       ^ meta.array.php support.function.construct.php
//        ^ meta.array.php punctuation.definition.array.begin.php
    'x'
);
// <- meta.array.php punctuation.definition.array.end.php

$x = [
//   ^ meta.array.php punctuation.definition.array.begin.php
    'x'
];
// <- meta.array.php punctuation.definition.array.end.php
