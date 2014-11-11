<?php

echo "Inside >" . __TRAIT__ . "<\n";
echo "Inside >" . __CLASS__ . "<\n";
echo "Inside >" . __METHOD__ . "<\n";
echo "Inside >" . __FUNCTION__ . "<\n";
trait T1 {}
class C1 { use T1; }
trait T2a
{
    function f()
    {
        echo "Inside " . __TRAIT__ . "\n";
        echo "Inside " . __CLASS__ . "\n";
        echo "Inside " . __METHOD__ . "\n";
    }
}
class C2Derived
{
    use T2a, T2b
    {
        T2a::f insteadof T2b;
        T2b::f as g;
        T2a::f as h;
    }
}
trait T3
{
    public function m1() { echo "Inside " . __METHOD__ . "\n"; }
    protected function m2() { echo "Inside " . __METHOD__ . "\n"; }
    private function m3() { echo "Inside " . __METHOD__ . "\n"; }
    function m4() { echo "Inside " . __METHOD__ . "\n"; }
}
class C3
{
    use T3
    {
        m1 as protected;
        m2 as private;
        m3 as public;
        m3 as protected z3;
    }
}
trait T4
{
    use Tx1, Tx2;
    use T2a, T2b, T3
    {
        Tx1::k as kk;
        T2a::f insteadof T2b;
    }
}
class C4
{
    use T4;
}
trait T5
{
    public static $prop;
}
class C5a
{
    use T5;
}
trait T6
{
    public function f()
    {
        echo "Inside " . __METHOD__ . "\n";
        static $v = 0;
        echo "\$v = " . $v++ . "\n";
    }
}
trait T9d
{
    use T9c;
    use T9a, T9b
    {
        T9a::compute insteadof T9b;
        T9c::sort as private sorter;
    }
}
trait T10
{
    private $prop1 = 1000;
    protected static $prop2;
    var $prop3;
    public function compute() {}
    public static function getData() {}
}
