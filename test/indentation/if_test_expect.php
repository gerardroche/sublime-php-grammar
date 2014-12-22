<?php

function start_with_at_least_one_indent() {

    $a = -10;
    if ($a < 0) {
        echo "Statement 1 < 0\n";
        echo "Statement 2 < 0\n";
    } elseif ($a == 0) {
        echo "Statement 3 == 0\n";
        echo "Statement 4 == 0\n";
    } else {
        echo "Statement 1; default\n";
        echo "Statement 2; default\n";
    }
    var_dump($a);

    $a = 0;
    if ($a < 0)
    {
        echo "Statement 1 < 0\n";
        echo "Statement 2 < 0\n";
    }
    elseif ($a == 0)
    {
        echo "Statement 1 == 0\n";
        echo "Statement 2 == 0\n";
    }
    else
    {
        echo "Statement 1; default\n";
        echo "Statement 2; default\n";
    }
    var_dump($a);

    $a = 10;
    if ($a < 0) { echo "Statement 1 < 0\n"; echo "Statement 2 < 0\n"; }
    elseif ($a == 0) { echo "Statement 1 == 0\n"; echo "Statement 2 == 0\n"; }
    else { echo "Statement 1; default\n"; echo "Statement 2; default\n"; }
    var_dump($a);

    $a = 10;
    if ($a < 0) { echo "Statement 1 < 0\n"; echo "Statement 2 < 0\n"; } elseif ($a == 0) { echo "Statement 1 == 0\n"; echo "Statement 2 == 0\n"; } else { echo "Statement 1; default\n"; echo "Statement 2; default\n"; }
    var_dump($a);

    $a = -10;
    if ($a < 0) :
        echo "Statement 1 < 0\n"; echo "Statement 2 < 0\n";
    endif;
    var_dump($a);

    $a = -10;
    if ($a < 0) : echo "Statement 1 < 0\n"; echo "Statement 2 < 0\n"; endif;
    var_dump($a);

    $a = 10;
    if ($a < 0) :
        echo "Statement 1 < 0\n"; echo "Statement 2 < 0\n";
    else :
        echo "Statement 1; default\n"; echo "Statement 2; default\n";
    endif;
    var_dump($a);

    $a = 10;
    if ($a < 0) : echo "Statement 1 < 0\n"; echo "Statement 2 < 0\n"; else : echo "Statement 1; default\n"; echo "Statement 2; default\n"; endif;
    var_dump($a);

    $a = -10;
    if ($a < 0) :
        echo "Statement 1 < 0\n"; echo "Statement 2 < 0\n";
    elseif ($a == 0) :
        echo "Statement 3 == 0\n"; echo "Statement 4 == 0\n";
    else :
        echo "Statement 1; default\n"; echo "Statement 2; default\n";
    endif;
    var_dump($a);

    $a = -10;
    if ($a < 0) : echo "Statement 1 < 0\n"; echo "Statement 2 < 0\n"; elseif ($a == 0) : echo "Statement 3 == 0\n"; echo "Statement 4 == 0\n"; else : echo "Statement 1; default\n"; echo "Statement 2; default\n"; endif;
    var_dump($a);

    if (0)
        echo "This line will not be executed\n";
    echo "Statement\n";
    var_dump('.');

    if (0) echo "This line will not be executed\n";
    echo "Statement\n";
    var_dump(0);

    if (1)
        echo "Statement 1\n";
    if (0)
        echo "This line will not be executed\n";
    else
        echo "Statement 2\n";
    var_dump('.');

    if (1)
    {
        echo "Statement\n";
        if (0)
            echo "This line will not be executed\n";
    }
    else
        echo "This line will not be executed\n";
    var_dump('.');

    $a = 10;
    if ($a < 0)
        ;
    elseif ($a == 0)
        ;
    elseif ($a < 10)
        ;
    else
        ;

    if ($a < 0)  :
        ++$a;
    endif  ;

    if ($a < 0)  :
        ++$a;
    else :
        --$a;
    endif  ;

    if ($a < 0):
        ;
    elseif ($a == 0)  :
        ;
    elseif ($a < 10):
        ;
    else:
        ;
    endif;

    if ($a < 0)  :
        ++$a; ++$a;
    endif  ;

    ?>

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
    <?php

}

var_dump('begin...');
start_with_at_least_one_indent();
var_dump('done.');
