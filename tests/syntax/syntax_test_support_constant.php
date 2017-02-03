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
 * Added in PHP 5.6.x
 */

MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT; // Added 5.6.16;
// ^ support.constant.ext

CURLM_ADDED_ALREADY; // Added 5.6.20;
// ^ support.constant.ext

/**
 * Removed in PHP 7.0.x
 */

MYSQL_CLIENT_COMPRESS;
// ^ -support.constant
MSSQL_ASSOC;
// ^ -support.constant

/**
 * Added in PHP 7.0.0
 */

PHP_INT_MIN;
// ^ support.constant.core
IMG_WEBP;
// ^ support.constant.ext
JSON_ERROR_UTF16;
// ^ support.constant.ext
LIBXML_BIGLINES;
// ^ support.constant.ext
PREG_JIT_STACKLIMIT_ERROR;
// ^ support.constant.ext
POSIX_RLIMIT_AS;
// ^ support.constant.ext
ZLIB_SYNC_FLUSH;
// ^ support.constant.ext

/**
 * Added in PHP 7.1.x
 */

PHP_FD_SETSIZE;
// ^ support.constant.core
JSON_UNESCAPED_LINE_TERMINATORS;
// ^ support.constant.ext
MT_RAND_PHP;
// ^ support.constant.std
