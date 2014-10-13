<?php

// @todo BUG `declare (expr) :` should increase indentation not just the next line
// @todo BUG `start-tag declare (expression) : end-tag (HTML block) should increase indentation

function start_with_at_least_one_indent() {

    declare(ticks = 0);

    declare(ticks = 0)
    {
        echo "Statement 1\n";
        echo "Statement 2\n";
    }

    declare(ticks = 0) {
        echo "Statement 1\n";
        echo "Statement 2\n";
    }

    declare(ticks = 0) :
        echo "Statement 1\n"; echo "Statement 2\n";
    enddeclare;
    var_dump('.');

    ?>
    <?php var_dump('.'); ?>
    <?php declare(ticks = 0) : ?>
    <?php echo "Statement 1\n"; ?>
    <?= "Statement 2\n"; ?>
    <?php enddeclare; ?>
    <?php var_dump('.'); ?>
    <?php

}

var_dump('begin...');
start_with_at_least_one_indent();
var_dump('done.');
