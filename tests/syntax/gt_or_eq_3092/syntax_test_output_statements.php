// SYNTAX TEST "Packages/php-grammar/PHP.tmLanguage"
<?php

echo 'hello world';
// ^ support.function.construct
//  ^ -support.function.construct

echo "hello world";
// ^ support.function.construct
//  ^ -support.function.construct

print 'hello world';
// ^ support.function.construct
//   ^ -support.function.construct

print "hello world";
// ^ support.function.construct
//   ^ -support.function.construct
