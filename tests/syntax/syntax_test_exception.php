// SYNTAX TEST "Packages/php-grammar/PHP.tmLanguage"
<?php

    try {
//  ^ keyword.control.exception.php

        throw new Exception('message');
//      ^^^^^ keyword.control.exception.php
//            ^^^ keyword.other.new.php
//                ^^^^^^^^^ support.class.builtin.php

    } catch (Exception $e) {
//    ^^^^^^^^^^^^^^^^^^^^ meta.catch.php
//    ^ meta.catch.php keyword.control.exception.catch.php
//           ^ meta.catch.php support.class.exception.php
//                     ^ meta.catch.php variable.other.php punctuation.definition.variable.php
//                     ^^ meta.catch.php variable.other.php

    } catch (___Name__ $e) {
//    ^^^^^^^^^^^^^^^^^^^^ meta.catch.php
//    ^ meta.catch.php keyword.control.exception.catch.php
//           ^ meta.catch.php support.class.exception.php
//                     ^ meta.catch.php variable.other.php punctuation.definition.variable.php
//                     ^^ meta.catch.php variable.other.php

    } catch (Name\Exception $e) {
//    ^^^^^^^^^^^^^^^^^^^^ meta.catch.php
//    ^ meta.catch.php keyword.control.exception.catch.php
//           ^ meta.catch.php support.other.namespace.php
//               ^ meta.catch.php support.other.namespace.php punctuation.separator.inheritance.php
//                ^ meta.catch.php support.class.exception.php
//                          ^ meta.catch.php variable.other.php punctuation.definition.variable.php
//                          ^^ meta.catch.php variable.other.php

    } finally {
//    ^ keyword.control.exception.php
    }
