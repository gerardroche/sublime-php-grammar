// SYNTAX TEST "Packages/php-grammar/PHP.tmLanguage"
<?php

// TODO fix multiple extends matching is consistency

interface Name extends ExtendC {}
// ^ meta storage.type
//          ^ meta entity.name.type
//              ^ meta storage.modifier.extends
//                      ^ meta entity.other.inherited-class

class Name extends ExtendC {}
// ^ meta storage.type
//      ^ meta entity.name.type
//          ^ meta storage.modifier.extends
//                  ^ meta entity.other.inherited-class

trait Name {}
// ^ meta storage.type
//      ^ meta entity.name.type
