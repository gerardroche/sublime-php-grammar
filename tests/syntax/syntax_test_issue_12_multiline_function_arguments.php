// SYNTAX TEST "Packages/php-grammar/PHP.tmLanguage"
<?php

function a(
    $foo,
//  ^ meta.function meta.function.arguments meta.function.argument.no-default variable punctuation
//   ^ meta.function meta.function.arguments meta.function.argument.no-default variable
    $bar
//  ^ meta.function meta.function.arguments meta.function.argument.no-default variable punctuation
//   ^ meta.function meta.function.arguments meta.function.argument.no-default variable
) {}

class Example
{
    public function aaaaaaa(Foo $var1, $var2)
//                           ^ meta.function meta.function.arguments meta.function.argument.typehinted support.class
//                              ^ meta.function meta.function.arguments meta.function.argument.typehinted variable punctuation
//                               ^ meta.function meta.function.arguments meta.function.argument.typehinted variable
//                                     ^ meta.function meta.function.arguments meta.function.argument.no-default variable punctuation
//                                      ^ meta.function meta.function.arguments meta.function.argument.no-default variable
    {

    }

    public function incorrect(
        Foo $var1, $var2
//      ^ meta.function meta.function.arguments meta.function.argument.typehinted support.class
//          ^ meta.function meta.function.arguments meta.function.argument.typehinted variable punctuation
//           ^ meta.function meta.function.arguments meta.function.argument.typehinted variable
//                 ^ meta.function meta.function.arguments meta.function.argument.no-default variable punctuation
//                  ^ meta.function meta.function.arguments meta.function.argument.no-default variable
    ) {

    }

    public function bbbbbbb(
        Foo $var1, $var2 = null
//      ^ meta.function meta.function.arguments meta.function.argument.typehinted support.class
//          ^ meta.function meta.function.arguments meta.function.argument.typehinted variable punctuation
//           ^ meta.function meta.function.arguments meta.function.argument.typehinted variable
//                 ^ meta.function meta.function.arguments meta.function.argument.default variable punctuation
//                  ^ meta.function meta.function.arguments meta.function.argument.default variable
//                       ^ meta.function meta.function.arguments meta.function.argument.default keyword.operator.assignment
//                          ^ meta.function meta.function.arguments meta.function.argument.default constant
    ) {

    }

    public function ccccccc(
        Foo $var1, Foo $var2
//      ^ meta.function meta.function.arguments meta.function.argument.typehinted support.class
//          ^ meta.function meta.function.arguments meta.function.argument.typehinted variable punctuation
//           ^ meta.function meta.function.arguments meta.function.argument.typehinted variable
//                  ^ meta.function meta.function.arguments meta.function.argument.typehinted support.class
//                     ^ meta.function meta.function.arguments meta.function.argument.typehinted variable punctuation
//                      ^ meta.function meta.function.arguments meta.function.argument.typehinted variable
    ) {

    }
}

function b(
    array $a,
//  ^ meta.function meta.function.arguments meta.function.argument.array
//        ^ meta.function meta.function.arguments meta.function.argument.array variable punctuation
//         ^ meta.function meta.function.arguments meta.function.argument.array variable
    array $b
//  ^ meta.function meta.function.arguments meta.function.argument.array
//        ^ meta.function meta.function.arguments meta.function.argument.array variable punctuation
//         ^ meta.function meta.function.arguments meta.function.argument.array variable
) {}
