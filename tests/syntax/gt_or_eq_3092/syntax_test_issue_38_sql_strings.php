// SYNTAX TEST "Packages/php-grammar/PHP.tmLanguage"
<?php

//
// double quotes
//

$x = "SELECT * FROM tbl";
//      ^ source.sql

$x = "SELECT";
//      ^ -source.sql

$x = "DELETE FROM tbl
//      ^ source.sql
WHERE x=y";
// ^ source.sql

$x = "DELETE";
//      ^ -source.sql

//
// single quotes
//

$x = 'SELECT * FROM tbl';
//      ^ source.sql

$x = 'SELECT';
//      ^ -source.sql

$x = 'DELETE FROM tbl
//      ^ source.sql
WHERE x=y';
// ^ source.sql

$x = 'DELETE';
//      ^ -source.sql
