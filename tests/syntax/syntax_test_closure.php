// SYNTAX TEST "Packages/php-grammar/PHP.tmLanguage"
<?php

$closure = function () {
//          ^ meta.function.closure storage.type.function
//                  ^ meta.function.closure punctuation.definition.parameters.begin
//                   ^ meta.function.closure punctuation.definition.parameters.end
};

$closureWithArgs = function ($arg1, $arg2) {
//                  ^ meta.function.closure storage.type.function
//                          ^ meta.function.closure punctuation.definition.parameters.begin
//                           ^ meta.function.arguments
//                                  ^ meta.function.arguments
//                                      ^ meta.function.arguments
//                                       ^ meta.function.closure punctuation.definition.parameters.end
};

$closureWithArgsAndVars = function ($arg1, $arg2) use ($var1, $var2) {
//                          ^ meta.function.closure storage.type.function
//                                 ^ meta.function.closure punctuation.definition.parameters.begin
//                                      ^ meta.function.closure
//                                              ^ meta.function.closure punctuation.definition.parameters.end
//                                                  ^ meta.function.closure keyword.other.function.use
//                                                    ^ meta.function.closure punctuation.definition.parameters.begin
//                                                     ^ meta.function.closure meta.function.closure.use variable punctuation.definition.variable
//                                                      ^ meta.function.closure meta.function.closure.use variable
//                                                            ^ meta.function.closure meta.function.closure.use variable punctuation.definition.variable
//                                                             ^ meta.function.closure meta.function.closure.use variable
//                                                              ^ meta.function.closure
//                                                                 ^ meta.function.closure punctuation.definition.parameters.end
};

$longArgs_noVars = function (
//                  ^ meta.function.closure storage.type.function
//                          ^ meta.function.closure punctuation.definition.parameters.begin
    $longArgument,
//  ^ meta.function.closure meta.function.arguments meta.function.argument.no-default variable punctuation.definition.variable
//      ^ meta.function.closure meta.function.arguments meta.function.argument.no-default variable
    $longerArgument,
//  ^ meta.function.closure meta.function.arguments meta.function.argument.no-default variable punctuation.definition.variable
//      ^ meta.function.closure meta.function.arguments meta.function.argument.no-default variable
    $muchLongerArgument
//  ^ meta.function.closure meta.function.arguments meta.function.argument.no-default variable punctuation.definition.variable
//      ^ meta.function.closure meta.function.arguments meta.function.argument.no-default variable
) {
// <- meta.function.closure punctuation.definition.parameters.end
};
