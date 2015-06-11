// SYNTAX TEST "Packages/php-grammar/PHP.tmLanguage"
<?php

array_merge(array(), array());
//  ^ support.function.array
\array_merge(array(), array());
// <- punctuation.separator.inheritance
//  ^ support.function.array

class_exists('classname', false);
//  ^ support.function.classobj
\class_exists('classname', false);
// <- punctuation.separator.inheritance
//  ^ support.function.classobj

mysqli_info($link)
// ^ support.function.mysqli
\mysqli_info($link)
// <- punctuation.separator.inheritance
// ^ support.function.mysqli

password_get_info('hash')
// ^ support.function.password
\password_get_info('hash')
// <- punctuation.separator.inheritance
// ^ support.function.password

iterator_to_array(new ArrayIterator(array('recipe'=>'pancakes', 'egg', 'milk', 'flour')), true);
// ^ support.function.php_spl
\iterator_to_array(new ArrayIterator(array('recipe'=>'pancakes', 'egg', 'milk', 'flour')), true);
// <- punctuation.separator.inheritance
// ^ support.function.php_spl
