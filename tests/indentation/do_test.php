--TEST--
Basic do statement
--FILE--
<?php

function () {

                $i = 1;
                do {
                    echo "$i\t".($i * $i)."\n";
                    ++$i;
                } while ($i <= 4);
                var_dump($i);

                $i = 1;
                do
                {
                    echo "$i\t".($i * $i)."\n";
                    ++$i;
                }
                while ($i <= 4);
                var_dump($i);

                $i = 1;
                do { echo "$i\t".($i * $i)."\n"; ++$i; } while ($i <= 4);
                var_dump($i);

                $i = 1;
                do { echo "$i\t".($i * $i)."\n"; ++$i; }
                while ($i <= 4);
                var_dump($i);

}

?>
--EXPECT--
<?php

function () {

    $i = 1;
    do {
        echo "$i\t".($i * $i)."\n";
        ++$i;
    } while ($i <= 4);
    var_dump($i);

    $i = 1;
    do
    {
        echo "$i\t".($i * $i)."\n";
        ++$i;
    }
    while ($i <= 4);
    var_dump($i);

    $i = 1;
    do { echo "$i\t".($i * $i)."\n"; ++$i; } while ($i <= 4);
    var_dump($i);

    $i = 1;
    do { echo "$i\t".($i * $i)."\n"; ++$i; }
    while ($i <= 4);
    var_dump($i);

}

?>
