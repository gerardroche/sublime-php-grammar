<?php

// @todo BUG single line for statement should not increase or decrease indent: for ($i = 1, $j = 0; $i <= 4; $j += $i, print $i, $i++);

function start_with_at_least_one_indent() {

    for ($i = 1; $i <= 4; ++$i) {
        echo "$i\t";
        echo ($i * $i)."\n";
    }
    var_dump($i);

    for ($i = 1; $i <= 4; ++$i)
    {
        echo "$i\t";
        echo ($i * $i)."\n";
    }
    var_dump($i);

    for ($i = 1; $i <= 4; ++$i) { echo "$i\t"; echo ($i * $i)."\n"; }
    var_dump($i);

    $i = 1;
    for (;;)
    {
        if ($i > 4) {
            break;
        }
        echo "$i\t".($i * $i)."\n";
        ++$i;
    }
    var_dump($i);

    for ($a = 40, $i = 1; ++$i, $i <= 4; ++$i, $a -= 4)
    {
        echo "$i\t";
        echo "$a\n";
    }
    var_dump($i);

    for ($i = 1; $i <= 4; ++$i) :
        echo "$i\t"; echo ($i * $i)."\n";
    endfor;
    var_dump($i);

    $i = 1;
    for (; $i <= 4;) :
        echo "$i\t".($i * $i)."\n"; ++$i;
    endfor;
    var_dump($i);

    for ($i = 1; $i <= 4; ++$i) : echo "$i\t"; echo ($i * $i)."\n"; endfor;
        var_dump($i);

    for ($i = 1; $i <= 4; ++$i) echo "$i\t"; echo ($i * $i)."\n";
        var_dump($i);

    for ($i = 1; $i <= 4; ++$i)
        echo "$i\t"; echo ($i * $i)."\n";
    var_dump($i);

    ?>
    <?php $count = 4; ?>
    <?php for ($i = 1; $i <= $count; ++$i) : ?>
        <?php echo "$i\t"; ?>
        <?= ($i * $i)."\n"; ?>
    <?php endfor; ?>
    <?php var_dump($i); ?>
    <?php

}

var_dump('begin...');
start_with_at_least_one_indent();
var_dump('done.');
