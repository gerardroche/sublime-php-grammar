--TEST--
One line control statements should not indent next line
--FILE--
<?php

if (true) { }
    if (true) { }
        if (true) { }
            foreach (array() as $item) { }
                foreach (array() as $item) { }
                    foreach (array() as $item) { }

?>
--EXPECT--
<?php

if (true) { }
if (true) { }
if (true) { }
foreach (array() as $item) { }
foreach (array() as $item) { }
foreach (array() as $item) { }

?>
