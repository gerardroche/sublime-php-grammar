// SYNTAX TEST "Packages/php-grammar/PHP.tmLanguage"
<?php

return;
// ^ keyword.control

    if (true) {
// ^ -keyword.control
//  ^ keyword.control
        return;
//     ^ -keyword.control
//      ^ keyword.control
    }
