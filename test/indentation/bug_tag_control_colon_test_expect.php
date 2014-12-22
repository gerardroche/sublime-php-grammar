<?php

function start_with_at_least_one_indent() {

    ?>
    <?php $i = 1; ?>
    <?php while ($i <= 4) : ?>
        <?= "$i\t".($i * $i)."\n"; ?>
        <?php $i++; ?>
    <?php endwhile; ?>
    <?php var_dump($i); ?>

    <?php $a = -10; ?>
    <?php if ($a < 0) : ?>
        <?php echo "Statement 1\n"; ?>
        <?= "Statement 2\n"; ?>
    <?php elseif ($a == 0) : ?>
        <?php echo "Statement 3\n"; ?>
        <?= "Statement 4\n"; ?>
    <?php elseif ($a < 10) : ?>
        <?php echo "Statement 1\n"; ?>
        <?= "Statement 2\n"; ?>
    <?php else : ?>
        <?php echo "Statement 7\n"; ?>
        <?= "Statement 8\n"; ?>
    <?php endif; ?>
    <?php var_dump($a); ?>

    <?php $list = array('a', 'b'); ?>
    <?php foreach ($list as $val) : ?>
        <?php echo $val; ?>
        <?= "\n"; ?>
    <?php endforeach; ?>
    <?php var_dump($val); ?>

    <?php $count = 4; ?>
    <?php for ($i = 1; $i <= $count; ++$i) : ?>
        <?php echo "$i\t"; ?>
        <?= ($i * $i)."\n"; ?>
    <?php endfor; ?>
    <?php var_dump($i); ?>

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
