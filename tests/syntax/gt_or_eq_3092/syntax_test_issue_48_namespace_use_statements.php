// SYNTAX TEST "Packages/php-grammar/PHP.tmLanguage"
<?php

namespace Name\Space {
    function name() {
//  ^ meta.function storage.type.function
    }
}

namespace Name {
    use const Name\Space\FOO;
//  ^ meta.use keyword.other.use
//      ^ meta.use storage.type.const
//              ^ meta.use support.other.namespace.use
//                  ^ meta.use support.other.namespace.use
//                        ^ meta.use support.other.namespace.use

    use function Name\Space\func;
//  ^ meta.use keyword.other.use
//      ^ meta.use storage.type.function
//                 ^ meta.use support.other.namespace.use
//                      ^ meta.use support.other.namespace.use
//                           ^ meta.use support.other.namespace.use
}
