--TEST--
Fix issue with phtml control structures

--FILE--
<?php

function start_with_at_least_one_indent() {

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

?>
--EXPECT--
<?php

function start_with_at_least_one_indent() {

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

?>
