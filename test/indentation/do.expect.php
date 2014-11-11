<?php

function start_with_at_least_one_indent() {

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

var_dump('begin...');
start_with_at_least_one_indent();
var_dump('done.');
