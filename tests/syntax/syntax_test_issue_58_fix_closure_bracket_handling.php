// SYNTAX TEST "Packages/php-grammar/PHP.tmLanguage"
<?php

$closure = function () {
//                     ^ punctuation.section.scope.begin
};
// <- punctuation.section.scope.end


$closureWithArgs = function ($arg1, $arg2) {
//                                         ^ punctuation.section.scope.begin
};
// <- punctuation.section.scope.end

$closureWithArgsAndVars = function ($arg1, $arg2) use ($var1, $var2) {
//                                                                   ^ punctuation.section.scope.begin
};
// <- punctuation.section.scope.end

$longArgs_noVars = function (
    $longArgument,
    $longerArgument,
    $muchLongerArgument
) {
//^ punctuation.section.scope.begin
};
// <- punctuation.section.scope.end
