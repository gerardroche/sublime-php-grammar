// SYNTAX TEST "Packages/php-grammar/PHP.tmLanguage"
<?php

echo 'hello world';
// ^ support.function.construct.output
//  ^ -support.function

echo "hello world";
// ^ support.function.construct.output
//  ^ -support.function

print 'hello world';
// ^ support.function.construct.output
//   ^ -support.function

print "hello world";
// ^ support.function.construct.output
//   ^ -support.function
