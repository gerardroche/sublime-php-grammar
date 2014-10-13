<?php

// @todo BUG `foreach (expr) :` should increase indentation not just the next line
// @todo BUG `start-tag foreach (expression) : end-tag (HTML block) should increase indentation

function start_with_at_least_one_indent() {

    foreach (array("a", "b") as $val) {
        echo $val;
        echo "\n";
    }
    var_dump($val);

    foreach (array('a', 'b') as $val)
    {
        echo $val;
        echo "\n";
    }
    var_dump($val);

    foreach (array('a', 'b') as $index => $val) {
        echo "Index: $index; val: $val";
        echo "\n";
    }
    var_dump($val);

    foreach (array('a', 'b') as $val) { echo $val; echo "\n"; }
    var_dump($val);

    foreach (array('a', 'b') as $val) :
        echo $val; echo "\n";
    endforeach;
    var_dump($val);

    foreach (array('a', 'b') as $val) : echo $val; echo "\n"; endforeach;
    var_dump($val);

    foreach (array('a', 'b') as $val) echo $val; echo "\n";
    var_dump($val);

    foreach (array('a', 'b') as $val)
        echo $val; echo "\n";
    var_dump($val);

    ?>
    <?php $list = array('a', 'b'); ?>
    <?php foreach ($list as $val) : ?>
    <?php echo $val; ?>
    <?= "\n"; ?>
    <?php endforeach; ?>
    <?php var_dump($val); ?>
    <?php
}

var_dump('begin...');
start_with_at_least_one_indent();
var_dump('done.');
