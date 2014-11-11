<?php

function start_with_at_least_one_indent() {

    $a = array();
    $a = array(1);
    $a = array(1, 2, 3);
    $a = array(1,2,3);
    $a = array('a');
    $a = array('a', 'b', 'c');
    $a = array('a','b','c');
    $a = array(1 => 'one', 2 => 'two', 3 => 'three');
    $a = array("x" => array("y" => "z"));
    $a = array(1 => 1, 2 => 2, 3 => 3);
    $a = array(array());
    $a = array(array(array(array(array()))));
    $a = array(array(),array(array(), array(), array()));

    $a = array(
    );

    $a = array(array(array(
    )));

    $a = array(
    )

    $a = array(array(array(
    )))

    $a = array(
        array()
    );

    $a = array(
        array(
            array(
                array(
                    array(
                    )
                )
            )
        )
    );

    $a = array(
        "a",
        "x" => "y",
        100 => -100,
        42,
        "multi" => array(
            "dimensional" => array(
                "array" => "x"
            )
        )
    );

    $a = array(
        "a" => array(
            "b" => "c"
        ),
        "i" => array(array(
            'j' => 'k'
        )),
        "x" => array(
            "y" => "z",
        )
    );

    $a = array('x' => 'y',
        'a' => 'b'
    );

    // bug

    $a = array(
        array(
            new \stdClass()
        )
    );

    $a = array(
        array(
            new \stdClass()
        ),
        array(
            'x'
        )
    );
}

class a
{
    private $b = array(
        "a",
        "x" => "y",
        100 => -100,
        42,
        "multi" => array(
            "dimensional" => array(
                "array" => "x"
            )
        ),
        "a" => array(
            "b" => "c"
        ),
        "i" => array(array(
            'j' => 'k'
        )),
        "x" => array(
            "y" => "z"
        )
    );
}

var_dump('begin...');
start_with_at_least_one_indent();
var_dump('done.');
