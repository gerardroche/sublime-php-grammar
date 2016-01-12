// SYNTAX TEST "Packages/php-grammar/PHP.tmLanguage"
<?php

// @todo https://github.com/gerardroche/sublime-php-grammar/issues/52

namespace Xyz;
// ^ meta.namespace
//        ^ meta.namespace entity.name.type.namespace

namespace N\a\m\e;
//  ^ meta.namespace
//        ^ meta.namespace entity.name.type.namespace
//          ^ meta.namespace entity.name.type.namespace
//            ^ meta.namespace entity.name.type.namespace
//              ^ meta.namespace entity.name.type.namespace
