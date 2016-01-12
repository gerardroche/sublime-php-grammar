// SYNTAX TEST "Packages/php-grammar/PHP.tmLanguage"
<?php

/**
 * Basic
 */

interface Name {}
// ^ meta storage.type
//          ^ meta entity.name.type
class ____Name {}
// ^ meta storage.type
//          ^ meta entity.name.type
trait ____Name {}
// ^ meta storage.type
//          ^ meta entity.name.type

/**
 * Extends
 */

interface Name extends ExtendsName {}
// ^ meta storage.type
//          ^ meta entity.name.type
//              ^ meta storage.modifier.extends
//                      ^ meta entity.other
class ____Name extends ExtendsName {}
// ^ meta storage.type
//          ^ meta entity.name.type
//              ^ meta storage.modifier.extends
//                      ^ meta entity.other


/**
 * Extends|Implements multiple
 */

interface Name extends Extends_____A, Extends____B, Extends___C {}
// ^ meta storage.type
//          ^ meta entity.name.type
//              ^ meta storage.modifier
//                      ^ meta entity.other
//                                      ^ meta entity.other
//                                                  ^ meta entity.other
class ____Name implements ImplementsA, ImplementsB, ImplementsC {}
// ^ meta storage.type
//          ^ meta entity.name.type
//              ^ meta storage.modifier
//                          ^ meta entity.other
//                                      ^ meta entity.other
//                                                  ^ meta entity.other
