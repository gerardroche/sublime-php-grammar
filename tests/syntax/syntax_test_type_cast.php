// SYNTAX TEST "Packages/php-grammar/PHP.tmLanguage"
<?php

(bool)
// ^ storage.type
(boolean)
// ^ storage.type

(int)
// ^ storage.type
(integer)
// ^ storage.type

(float)
// ^ storage.type
(double)
// ^ storage.type
(real)
// ^ storage.type

(string)
// ^ storage.type

(object)
// ^ storage.type

(unset)
// ^ storage.type

(binary)
// ^ storage.type

(array) (int) (string)
// ^ storage.type
//        ^ storage.type
//              ^ storage.type

(array)(int)(string)
// ^ storage.type
//       ^ storage.type
//              ^ storage.type

$test = (int) $test;
//        ^ storage.type

$test = (int) (object)(string)(float) $test;
//        ^ storage.type
//              ^ storage.type
//                      ^ storage.type
//                              ^ storage.type

$test = (int) $test;
//        ^ storage.type

$test = (float) (string) (int) $test;
//        ^ storage.type

call((int) $id);
//     ^ storage.type

call(
    (int) $id,
//    ^ storage.type
    (array) $id,
//    ^ storage.type
    (string) $id
//    ^ storage.type
);

// Parens scope

(bool)
// <- punctuation.definition.begin
// ^ storage.type
//   ^ punctuation.definition.end

$x = (string) $y;
//   ^ punctuation.definition.begin
//      ^ storage.type
//          ^ punctuation.definition.end

call((int) $id);
//   ^ punctuation.definition.begin
//     ^ storage.type
//       ^ punctuation.definition.end

   (     bool    )
// ^ punctuation.definition.begin
//        ^ storage.type
//               ^ punctuation.definition.end

$_;
