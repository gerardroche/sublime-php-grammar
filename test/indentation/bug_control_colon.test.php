<?php

function start_with_at_least_one_indent() {

    $i = 1;
    while ($i <= 4) :
        echo "$i\t".($i * $i)."\n";
        ++$i;
    endwhile;
    var_dump($i);

    $a = -10;
    if ($a < 0) :
        echo "Statement 1 < 0\n";
        echo "Statement 2 < 0\n";
    elseif ($a == 0) :
        echo "Statement 3 == 0\n";
        echo "Statement 4 == 0\n";
    else :
        echo "Statement 1; default\n";
        echo "Statement 2; default\n";
    endif;
    var_dump($a);

    foreach (array('a', 'b') as $val) :
        echo $val;
        echo "\n";
    endforeach;
    var_dump($val);

    $i = 1;
    for (; $i <= 4;) :
        echo "$i\t".($i * $i)."\n";
        ++$i;
    endfor;
    var_dump($i);

    declare(ticks = 0) :
        echo "Statement 1\n";
        echo "Statement 2\n";
    enddeclare;
    var_dump('.');

}

var_dump('begin...');
start_with_at_least_one_indent();
var_dump('done.');
