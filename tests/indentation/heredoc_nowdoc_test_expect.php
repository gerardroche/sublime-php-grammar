<?php

function start_with_at_least_one_indent() {

    $str = <<<HEREDOC

    Indentation inside heredoc should be preserved.

        Example of string
            spanning multiple lines
    using heredoc syntax.
HEREDOC;

    echo 'Statement';
    echo "\n";

    $str = <<<'NOWDOC'

    Indentation inside nowdoc should be preserved.

        Example of string
            spanning multiple lines
    using heredoc syntax.
NOWDOC;

    echo 'Statement';
    echo "\n";

}

class x
{
    const A = <<<A_HEREDOC

            Indentation inside nowdoc should be preserved.

        Example of string
            spanning multiple lines
    using heredoc syntax.

A_HEREDOC;

    public $b = <<<B_HEREDOC

            Indentation inside nowdoc should be preserved.

        Example of string
            spanning multiple lines
    using heredoc syntax.

B_HEREDOC;

}

var_dump('begin...');
start_with_at_least_one_indent();
var_dump('done.');
