// SYNTAX TEST "Packages/php-grammar/PHP.tmLanguage"
<?php

class Name
// ^ meta.class storage.type.class
//      ^ meta.class entity.name.type.class
{

}

class Name
// ^ meta.class storage.type.class
//      ^ meta.class entity.name.type.class
{}

class Name {}
// ^ meta.class storage.type.class
//      ^ meta.class entity.name.type.class

class Name extends ExtendA
// ^ meta.class storage.type.class
//      ^ meta.class entity.name.type.class
//          ^ meta.class storage.modifier.extends
//                  ^ meta.class meta.other.inherited-class entity.other.inherited-class
{

}

// TODO fix multiple extends matching
class Name extends ExtendA, ExtendsB, ExtendsC
// ^ meta.class storage.type.class
//      ^ meta.class entity.name.type.class
//          ^ meta.class storage.modifier.extends
//                  ^ meta.class meta.other.inherited-class entity.other.inherited-class
//                          TODO ^ -meta.class meta.other.inherited-class entity.other.inherited-class
//                                  TODO ^ -meta.class meta.other.inherited-class entity.other.inherited-class
{

}

class Name implements ImplementsA
// ^ meta.class storage.type.class
//      ^ meta.class entity.name.type.class
//          ^ meta.class storage.modifier.implements
//                      ^ meta.class meta.other.inherited-class entity.other.inherited-class
{

}

class Name implements ImplementsA, ImplementsB, ImplementsC
// ^ meta.class storage.type.class
//      ^ meta.class entity.name.type.class
//          ^ meta.class storage.modifier.implements
//                      ^ meta.class meta.other.inherited-class entity.other.inherited-class
//                                  ^ meta.class meta.other.inherited-class entity.other.inherited-class
//                                                  ^ meta.class meta.other.inherited-class entity.other.inherited-class
{

}

// TODO fix multiple extends matching
class Name extends ExtendA, ExtendsB, ExtendsC implements ImplementsA, ImplementsB, ImplementsC
// ^ meta.class storage.type.class
//      ^ meta.class entity.name.type.class
//          ^ meta.class storage.modifier.extends
//                  ^ meta.class meta.other.inherited-class entity.other.inherited-class
//                          TODO ^ -meta.class meta.other.inherited-class entity.other.inherited-class
//                                  TODO ^ -meta.class meta.other.inherited-class entity.other.inherited-class
//                                                  ^ meta.class storage.modifier.implements
//                                                              ^ meta.class meta.other.inherited-class entity.other.inherited-class
//                                                                          ^ meta.class meta.other.inherited-class entity.other.inherited-class
//                                                                                          ^ meta.class meta.other.inherited-class entity.other.inherited-class
{

}
