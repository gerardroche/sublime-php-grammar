// SYNTAX TEST "Packages/php-grammar/PHP.tmLanguage"
<?php

$foo = $this->getRequest();
//              ^ meta.function-call.object

$foo = $this->request;
//              ^ variable.other.property
