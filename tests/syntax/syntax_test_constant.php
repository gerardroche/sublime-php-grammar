// SYNTAX TEST "Packages/php-grammar/PHP.tmLanguage"
<?php

/**
 * Null
 */

null;
// ^ constant.language.null
NULL;
// ^ constant.language.null

/**
 * Boolean
 */

true;
// ^ constant.language.boolean
TRUE;
// ^ constant.language.boolean
false;
// ^ constant.language.boolean
FALSE;
// ^ constant.language.boolean

/**
 * Magic
 */

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
