--TEST--
declare statment
--FILE--
<?php

function () {

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

?>
--EXPECT--
<?php

function () {

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

?>
