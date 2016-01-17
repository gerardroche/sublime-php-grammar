// SYNTAX TEST "Packages/php-grammar/PHP.tmLanguage"
<?php

// Namespaces

namespace x {}
//          ^ punctuation.section.scope.begin.php
//           ^ punctuation.section.scope.end.php

namespace x {
//          ^ punctuation.section.scope.begin.php
}
// <- punctuation.section.scope.end.php

namespace x
{
// <- punctuation.section.scope.begin.php
}
// <- punctuation.section.scope.end.php

// Classes

class x {}
//      ^ punctuation.section.scope.begin.php
//       ^ punctuation.section.scope.end.php

class x {
//      ^ punctuation.section.scope.begin.php
}
// <- punctuation.section.scope.end.php

class x
{
// <- punctuation.section.scope.begin.php
}
// <- punctuation.section.scope.end.php

// Functions

function x() {}
//           ^ punctuation.section.scope.begin.php
//            ^ punctuation.section.scope.end.php

function x() {
//           ^ punctuation.section.scope.begin.php
}
// <- punctuation.section.scope.end.php

function x()
{
// <- punctuation.section.scope.begin.php
}
// <- punctuation.section.scope.end.php

// Methods

class x
{
    public function a()
    {
//  ^ punctuation.section.scope.begin.php
        echo '...';
    }
//  ^ punctuation.section.scope.end.php

    protected function b()
    {
//  ^ punctuation.section.scope.begin.php
        echo '...';
    }
//  ^ punctuation.section.scope.end.php

    private function a()
    {
//  ^ punctuation.section.scope.begin.php
        echo '...';
    }
//  ^ punctuation.section.scope.end.php
}

// Control structures

if (true) {
//        ^ punctuation.section.scope.begin.php

}
// <- punctuation.section.scope.end.php

foreach ($collection as $value) {
//                              ^ punctuation.section.scope.begin.php

}
// <- punctuation.section.scope.end.php

