// SYNTAX TEST "Packages/php-grammar/PHP.tmLanguage"
<?php

$double_quotes = "SELECT * FROM tbl";
//                  ^ source.sql keyword
//                       ^ source.sql keyword
//                          ^ source.sql keyword

$single_quotes = 'SELECT * FROM tbl';
//                  ^ source.sql keyword
//                          ^ source.sql keyword

$double_quotes = "UPDATE t1 SET col1 = col1 + 1, col2 = col1;";
//                  ^ source.sql keyword
//                          ^ source.sql keyword

$single_quotes = 'UPDATE t1 SET col1 = col1 + 1, col2 = col1;';
//                  ^ source.sql keyword
//                          ^ source.sql keyword

$double_quotes = "INSERT INTO tbl_name (col1, col2) VALUES (15, col1 * 2);";
//                  ^ source.sql keyword
//                          ^ source.sql keyword
//                                                  ^ source.sql keyword

$single_quotes = 'INSERT INTO tbl_name (col1, col2) VALUES (15, col1 * 2);';
//                  ^ source.sql keyword
//                          ^ source.sql keyword
//                                                      ^ source.sql keyword
