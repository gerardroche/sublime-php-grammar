--TEST--
Function call and class instantiation parens should increase indentation #4
--FILE--
<?php

function x()
{
    // function calls

    function_call();
    echo '_';

    function_call(
    );
    echo '_';

    function_call(

    );
    echo '_';

    // function calls with arguments

    function_call($var, $var2);
    echo '_';

    function_call(array());
    echo '_';

    function_call(array(

    ));
    echo '_';

    function_call(array(array(

    )));
    echo '_';

    function_call([]);
    echo '_';

    function_call(
        $var1
    );
    echo '_';

    function_call(
        new cls()
    );
    echo '_';

    function_call(
        new cls(
            $var1,
            $var2
        )
    );
    echo '_';

    function_call(new cls(
        $var1,
        $var2
    ));
    echo '_';

    function_call(
        $var1,
        $var2,
        new Cls(),
        $var3
    );
    echo '_';

    // closures

    $_ = function () {
        echo '_';
    };
    echo '_';

    $_ = function (
    ) {
        echo '_';
    };
    echo '_';

    $_ = function (
    )
    {
        echo '_';
    };
    echo '_';

    // closures with arguments

    $_ = function ($x1, $x2, $x3) {
        echo '_';
    };
    echo '_';

    $_ = function (
        $x1,
        $x2,
        $x3
    ) {
        echo '_';
    };
    echo '_';

    $_ = function ($x1 = array()) {
        echo '_';
    };
    echo '_';

    $_ = function (
        $x1 = array()
    ) {
        echo '_';
    };
    echo '_';

    $_ = function (
        $x1 = array()
    )
    {
        echo '_';
    };
    echo '_';

    // closures with "use" keyword

    $_ = function () use ($x) {
        echo '_';
    };
    echo '_';

    $_ = function ( ) use ( $x ) {
        echo '_';
    };
    echo '_';

    $_ = function () use (
        $x
    ) {
        echo '_';
    };
    echo '_';

    $_ = function (
    ) use ($x) {
        echo '_';
    };
    echo '_';

    $_ = function (
    ) use (
        $x
    ) {
        echo '_';
    };
    echo '_';

    // strings with parens, braces, etc should not indent or deindent

    echo ')';
    echo '_';
    echo '(';
    echo '_';
    echo '{';
    echo '_';
    echo '}';
    echo '_';
    echo 'function_all(';
    echo '_';
    echo ') {';
    echo '_';

    echo '
    )
    x
    ';

    echo '
    ) {
    x
    ';

    echo '
    (
    x
    ';

    echo '
    function_call(
    x
    ';

    // comments with parens, braces, etc should not indent or deindent

    // )
    // -----
    // (
    // x
    // {
    // -----
    // }
    // -----
    // function_all(
    // );
    // -----
    // ) {
    // -----
}

?>
--EXPECT--
<?php

function x()
{
    // function calls

    function_call();
    echo '_';

    function_call(
    );
    echo '_';

    function_call(

    );
    echo '_';

    // function calls with arguments

    function_call($var, $var2);
    echo '_';

    function_call(array());
    echo '_';

    function_call(array(

    ));
    echo '_';

    function_call(array(array(

    )));
    echo '_';

    function_call([]);
    echo '_';

    function_call(
        $var1
    );
    echo '_';

    function_call(
        new cls()
    );
    echo '_';

    function_call(
        new cls(
            $var1,
            $var2
        )
    );
    echo '_';

    function_call(new cls(
        $var1,
        $var2
    ));
    echo '_';

    function_call(
        $var1,
        $var2,
        new Cls(),
        $var3
    );
    echo '_';

    // closures

    $_ = function () {
        echo '_';
    };
    echo '_';

    $_ = function (
    ) {
        echo '_';
    };
    echo '_';

    $_ = function (
    )
    {
        echo '_';
    };
    echo '_';

    // closures with arguments

    $_ = function ($x1, $x2, $x3) {
        echo '_';
    };
    echo '_';

    $_ = function (
        $x1,
        $x2,
        $x3
    ) {
        echo '_';
    };
    echo '_';

    $_ = function ($x1 = array()) {
        echo '_';
    };
    echo '_';

    $_ = function (
        $x1 = array()
    ) {
        echo '_';
    };
    echo '_';

    $_ = function (
        $x1 = array()
    )
    {
        echo '_';
    };
    echo '_';

    // closures with "use" keyword

    $_ = function () use ($x) {
        echo '_';
    };
    echo '_';

    $_ = function ( ) use ( $x ) {
        echo '_';
    };
    echo '_';

    $_ = function () use (
        $x
    ) {
        echo '_';
    };
    echo '_';

    $_ = function (
    ) use ($x) {
        echo '_';
    };
    echo '_';

    $_ = function (
    ) use (
        $x
    ) {
        echo '_';
    };
    echo '_';

    // strings with parens, braces, etc should not indent or deindent

    echo ')';
    echo '_';
    echo '(';
    echo '_';
    echo '{';
    echo '_';
    echo '}';
    echo '_';
    echo 'function_all(';
    echo '_';
    echo ') {';
    echo '_';

    echo '
    )
    x
    ';

    echo '
    ) {
    x
    ';

    echo '
    (
    x
    ';

    echo '
    function_call(
    x
    ';

    // comments with parens, braces, etc should not indent or deindent

    // )
    // -----
    // (
    // x
    // {
    // -----
    // }
    // -----
    // function_all(
    // );
    // -----
    // ) {
    // -----
}

?>
