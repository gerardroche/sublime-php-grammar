// SYNTAX TEST "Packages/php-grammar/PHP.tmLanguage"
<?php

interface Name
// ^ meta.interface storage.type.interface
//         ^ meta.interface entity.name.type.interface
{

}

interface Name
// ^ meta.interface storage.type.interface
//         ^ meta.interface entity.name.type.interface
{}

interface Name {}
// ^ meta.interface storage.type.interface
//         ^ meta.interface entity.name.type.interface

interface Name extends ExtendA
// ^ meta.interface storage.type.interface
//         ^ meta.interface entity.name.type.interface
//               ^ meta.interface storage.modifier.extends
//                      ^ meta.interface entity.other.inherited-class
{

}

// TODO fix multiple inheritance matching
interface Name extends ExtendA, ExtendB, ExtendC
// ^ meta.interface storage.type.interface
//         ^ meta.interface entity.name.type.interface
//               ^ meta.interface storage.modifier.extends
//                  TODO ^ -meta.interface entity.other.inherited-class
//                          TODO ^ -meta.interface entity.other.inherited-class
//                                          ^ meta.interface entity.other.inherited-class
{

}
