// SYNTAX TEST "Packages/php-grammar/PHP.tmLanguage"
<?php

// ----------------------------------------------------------------------------
// Meta storage types
// ----------------------------------------------------------------------------

interface Name {}
// ^ meta storage.type
class Name {}
// ^ meta storage.type
trait Name {}
// ^ meta storage.type

// ----------------------------------------------------------------------------
// Meta entity name types
// ----------------------------------------------------------------------------

interface Name {}
//          ^ meta entity.name.type
class ABCDName {}
//          ^ meta entity.name.type
trait ABCDName {}
//          ^ meta entity.name.type

// ----------------------------------------------------------------------------
// Meta storage modifiers
// ----------------------------------------------------------------------------

interface Name extends ExtendsName {}
//              ^ meta storage.modifier
class ABCDName extends ExtendsName {}
//              ^ meta storage.modifier
class ABCDName implements ImplementedName {}
//              ^ meta storage.modifier

// ----------------------------------------------------------------------------
// Meta entity other
// ----------------------------------------------------------------------------

interface Name extends ExtendsName {}
//                      ^ meta entity.other
class ____Name extends ExtendsName {}
//                      ^ meta entity.other


// ----------------------------------------------------------------------------
// Meta entity other (multiple)
// ----------------------------------------------------------------------------

interface Name extends ExtendsABCDEFG, ExtendsABCD, ExtendsC {}
//                          ^ meta entity.other
//                                      ^ meta entity.other
//                                                      ^ meta entity.other

class ABCDName implements ImplementsA, ImplementsB, ImplementsC {}
//                          ^ meta entity.other
//                                      ^ meta entity.other
//                                                      ^ meta entity.other
