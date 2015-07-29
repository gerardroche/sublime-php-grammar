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

interface Name extends ExtendsA
// ^ meta.interface storage.type.interface
//         ^ meta.interface entity.name.type.interface
//               ^ meta.interface storage.modifier.extends
//                      ^ meta.interface entity.other.inherited-class
{

}

interface Name extends ExtendsA, ExtendsB, ExtendsC
// ^ meta.interface storage.type.interface
//         ^ meta.interface entity.name.type.interface
//               ^ meta.interface storage.modifier.extends
//                      ^ meta.interface entity.other.inherited-class
//                                  ^ meta.interface entity.other.inherited-class
//                                          ^ meta.interface entity.other.inherited-class
{

}
