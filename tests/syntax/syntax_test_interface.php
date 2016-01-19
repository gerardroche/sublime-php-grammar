// SYNTAX TEST "Packages/php-grammar/PHP.tmLanguage"
<?php

interface Name
// ^ meta.interface storage.type.interface
//          ^ meta.interface entity.name.type.interface
{

}

interface Name
// ^ meta.interface storage.type.interface
//          ^ meta.interface entity.name.type.interface
{}

interface Name {}
// ^ meta.interface storage.type.interface
//          ^ meta.interface entity.name.type.interface

