// SYNTAX TEST "Packages/php-grammar/PHP.tmLanguage"
<?php

// @todo https://github.com/gerardroche/sublime-php-grammar/issues/52
// @todo https://github.com/gerardroche/sublime-php-grammar/issues/55

namespace Xyz {
// ^ meta.namespace keyword.other.namespace
//        ^ meta.namespace entity.name.type.namespace
}

namespace N\a\m\e {
//  ^ meta.namespace keyword.other.namespace
//        ^ meta.namespace entity.name.type.namespace
//          ^ meta.namespace entity.name.type.namespace
//            ^ meta.namespace entity.name.type.namespace
//              ^ meta.namespace entity.name.type.namespace
}

namespace Xyz
// ^ meta.namespace keyword.other.namespace
//        ^ meta.namespace entity.name.type.namespace
{}

namespace N\a\m\e
//  ^ meta.namespace keyword.other.namespace
//        ^ meta.namespace entity.name.type.namespace
//          ^ meta.namespace entity.name.type.namespace
//            ^ meta.namespace entity.name.type.namespace
//              ^ meta.namespace entity.name.type.namespace
{

}
