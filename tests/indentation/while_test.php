--TEST--
While statement
--FILE--
<?php

function () {

                $i = 1;
                while ($i <= 4) {
                    echo "$i\t".($i * $i)."\n";
                    $i++;
                }
                var_dump($i);

                $i = 1;
                while ($i <= 4)
                {
                    echo "$i\t".($i * $i)."\n";
                    $i++;
                }
                var_dump($i);

                $i = 1;
                while ($i <= 4) { echo "$i\t".($i * $i)."\n"; $i++; }
                var_dump($i);

                $i = 1;
                while ($i <= 4) :
                    echo "$i\t".($i * $i)."\n"; ++$i;
                endwhile;
                var_dump($i);

                $i = 1;
                while ($i <= 4) : echo "$i\t".($i * $i)."\n"; ++$i; endwhile;
                var_dump($i);

                $i = 1;
                while ($i <= 4) ++$i; echo "$i\t".($i * $i)."\n";
                var_dump($i);

                $i = 1;
                while ($i <= 4)
                    ++$i; echo "$i\t".($i * $i)."\n";
                var_dump($i);

                ?>
                <?php $i = 1; ?>
                <?php while ($i <= 4) : ?>
                <?= "$i\t".($i * $i)."\n"; ?>
                <?php $i++; ?>
                <?php endwhile; ?>
                <?php var_dump($i); ?>
                <?php

}

?>
--EXPECT--
<?php

function () {

    $i = 1;
    while ($i <= 4) {
        echo "$i\t".($i * $i)."\n";
        $i++;
    }
    var_dump($i);

    $i = 1;
    while ($i <= 4)
    {
        echo "$i\t".($i * $i)."\n";
        $i++;
    }
    var_dump($i);

    $i = 1;
    while ($i <= 4) { echo "$i\t".($i * $i)."\n"; $i++; }
    var_dump($i);

    $i = 1;
    while ($i <= 4) :
        echo "$i\t".($i * $i)."\n"; ++$i;
    endwhile;
    var_dump($i);

    $i = 1;
    while ($i <= 4) : echo "$i\t".($i * $i)."\n"; ++$i; endwhile;
    var_dump($i);

    $i = 1;
    while ($i <= 4) ++$i; echo "$i\t".($i * $i)."\n";
    var_dump($i);

    $i = 1;
    while ($i <= 4)
        ++$i; echo "$i\t".($i * $i)."\n";
    var_dump($i);

    ?>
    <?php $i = 1; ?>
    <?php while ($i <= 4) : ?>
        <?= "$i\t".($i * $i)."\n"; ?>
        <?php $i++; ?>
    <?php endwhile; ?>
    <?php var_dump($i); ?>
    <?php

}

?>
