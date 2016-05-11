// SYNTAX TEST "Packages/php-grammar/PHP.tmLanguage"
<?php

// Null

null;
// ^ constant.language.null
NULL;
// ^ constant.language.null

// Boolean

true;
// ^ constant.language.boolean
TRUE;
// ^ constant.language.boolean
false;
// ^ constant.language.boolean
FALSE;
// ^ constant.language.boolean

// Magic

__LINE__;
// ^ constant.language.magic
__FILE__;
// ^ constant.language.magic
__DIR__;
// ^ constant.language.magic
__FUNCTION__;
// ^ constant.language.magic
__CLASS__;
// ^ constant.language.magic
__TRAIT__;
// ^ constant.language.magic
__METHOD__;
// ^ constant.language.magic
__NAMESPACE__;
// ^ constant.language.magic

// Core

E_ALL
// ^ support.constant.core
\E_ALL
// <- punctuation.separator.inheritance
// ^ support.constant.core

PHP_RELEASE_VERSION
// ^ support.constant.core
\PHP_RELEASE_VERSION
// <- punctuation.separator.inheritance
// ^ support.constant.core

DIRECTORY_SEPARATOR
// * support.constant.std
\DIRECTORY_SEPARATOR
// <- punctuation.separator.inheritance
// ^ support.constant.std

ASSERT_CALLBACK
// ^ support.constant.std
\ASSERT_CALLBACK
// <- punctuation.separator.inheritance
// ^ support.constant.std

OPENSSL_VERSION_NUMBER
// ^ support.constant.ext
\OPENSSL_VERSION_NUMBER
// <- punctuation.separator.inheritance
// ^ support.constant.ext

APACHE_MAP
// ^ support.constant.ext
\APACHE_MAP
// <- punctuation.separator.inheritance
// ^ support.constant.ext
MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT // added 5.6.16
// ^ support.constant.ext
CURLM_ADDED_ALREADY // added 5.6.20
// ^ support.constant.ext

T_IMPLEMENTS
// ^ support.constant.parser-token
\T_IMPLEMENTS
// <- punctuation.separator.inheritance
// ^ support.constant.parser-token

T_YIELD
// ^ support.constant.parser-token
\T_YIELD
// <- punctuation.separator.inheritance
// ^ support.constant.parser-token

/**
 * Removed Extensions and SAPIs in PHP 7.0.0
 */

MYSQL_CLIENT_COMPRESS
// ^ -support.constant
MSSQL_ASSOC
// ^ -support.constant
