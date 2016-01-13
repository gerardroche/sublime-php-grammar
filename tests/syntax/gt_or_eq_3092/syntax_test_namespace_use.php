// SYNTAX TEST "Packages/php-grammar/PHP.tmLanguage"
<?php

namespace NS;

use Name;
// <- meta.use keyword.other.use
//  ^ meta.use support.other.namespace.use

// this is the same as use My\Full\NSname as NSname
use My\Full\NSname;
// <- meta.use keyword.other.use
//  ^ meta.use support.other.namespace.use
//      ^ meta.use support.other.namespace.use
//              ^ meta.use support.other.namespace.use

// importing a global class
use ArrayObject;
// <- meta.use keyword.other.use
//  ^ meta.use support.class.builtin

use My\Full\Classname as Another;
// <- meta.use keyword.other.use
//  ^ meta.use support.other.namespace.use
//      ^ meta.use support.other.namespace.use
//              ^ meta.use support.other.namespace.use
//                    ^ meta.use keyword.other.use-as
//                          ^ meta.use support.other.namespace.use-as

// importing a function (PHP 5.6+)
use function Name;
// <- meta.use keyword.other.use
//           ^ meta.use support.other.namespace.use

// aliasing a function (PHP 5.6+)
use function My\Full\functionName as func;
// <- meta.use keyword.other.use
//      ^ meta.use storage.type.function
//           ^ meta.use support.other.namespace.use
//               ^ meta.use support.other.namespace.use
//                      ^ meta.use support.other.namespace.use
//                                ^ meta.use keyword.other.use-as
//                                      ^ meta.use support.other.namespace.use-as

// importing a constant (PHP 5.6+)
use const My\Full\CONSTANT;
// <- meta.use keyword.other.use
//  ^ meta.use storage.type.const
//        ^ meta.use support.other.namespace.use
//              ^ meta.use support.other.namespace.use
//                  ^ meta.use support.other.namespace.use
