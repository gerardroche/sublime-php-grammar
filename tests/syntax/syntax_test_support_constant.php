// SYNTAX TEST "Packages/php-grammar/PHP.tmLanguage"
<?php

/**
 * Core
 */

E_ALL;
// ^ support.constant.core
\E_ALL;
// <- punctuation.separator.inheritance
// ^ support.constant.core

PHP_RELEASE_VERSION;
// ^ support.constant.core
\PHP_RELEASE_VERSION;
// <- punctuation.separator.inheritance
// ^ support.constant.core

DIRECTORY_SEPARATOR;
// ^ support.constant.std
\DIRECTORY_SEPARATOR;
// <- punctuation.separator.inheritance
// ^ support.constant.std

ASSERT_CALLBACK;
// ^ support.constant.std
\ASSERT_CALLBACK;
// <- punctuation.separator.inheritance
// ^ support.constant.std

/**
 * Ext
 */

OPENSSL_VERSION_NUMBER;
// ^ support.constant.ext
\OPENSSL_VERSION_NUMBER;
// <- punctuation.separator.inheritance
// ^ support.constant.ext

APACHE_MAP;
// ^ support.constant.ext
\APACHE_MAP;
// <- punctuation.separator.inheritance
// ^ support.constant.ext

/**
 * Parser Token
 */

T_IMPLEMENTS;
// ^ support.constant.parser-token
\T_IMPLEMENTS;
// <- punctuation.separator.inheritance
// ^ support.constant.parser-token

T_YIELD;
// ^ support.constant.parser-token
\T_YIELD;
// <- punctuation.separator.inheritance
// ^ support.constant.parser-token

/**
 * Constants added in PHP 5.6.x
 */

MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT; // Added 5.6.16;
// ^ support.constant.ext

CURLM_ADDED_ALREADY; // Added 5.6.20;
// ^ support.constant.ext

/**
 * Removed Extensions and SAPIs in PHP 7.0.0
 */

MYSQL_CLIENT_COMPRESS;
// ^ -support.constant
MSSQL_ASSOC;
// ^ -support.constant

/**
 * Constants added in PHP 7.0.0
 */

PHP_INT_MIN; // Added PHP 7.0.0;
// ^ support.constant.core
LIBXML_BIGLINES; // Added PHP 7.0.0;
// ^ support.constant.ext
PREG_JIT_STACKLIMIT_ERROR; // Added PHP 7.0.0;
// ^ support.constant.ext
POSIX_RLIMIT_AS; // Added PHP 7.0.0;
// ^ support.constant.ext
ZLIB_SYNC_FLUSH; // Added PHP 7.0.0;
// ^ support.constant.ext
