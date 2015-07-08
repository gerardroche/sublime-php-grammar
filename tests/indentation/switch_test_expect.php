<?php

// @todo BUG `switch (expr) :` should increase indentation

function start_with_at_least_one_indent() {

    switch (true) {}

    switch (true) {
    }

    switch (true)
    {
    }

    switch (true) {
        ;
    }

    switch (1) {
        case 0 :
        echo "equals 0";
        echo "\n";
        break;
        case 1 :
        echo "equals 1";
        echo "\n";
        break;
    }

    switch (1)
    {
        default :
        echo "default case";
        echo "\n";
    }

    switch (1) {
        case 0 : echo "equals 0"; echo "\n"; break;
        case 1 : echo "equals 1"; echo "\n"; break;
        default : echo "default case"; echo "\n";
    }

    switch (true):
    endswitch;
    var_dump('.');

    switch (true): endswitch;
    var_dump('.');

    switch (10) :
    case 10 :
    echo "case 10\n";
    break;
    case 20 :
    echo "case 20\n";
    break;
    default :
    echo "default case";
    break;
    endswitch;
    var_dump('.');

    switch (10) :
    case 10 : echo "case 10\n"; break;
    case 20 : echo "case 20\n"; break;
    default : echo "default case"; break;
    endswitch;
    var_dump('.');

    switch (10) : case 10 : echo "case 10\n"; break; case 20 : echo "case 20\n"; break; default : echo "default case"; break; endswitch;
    var_dump('.');
}

var_dump('begin...');
start_with_at_least_one_indent();
var_dump('done.');
