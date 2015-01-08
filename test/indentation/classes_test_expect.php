<?php

// @todo BUG multi line array properties

interface Runnable
{
    const RUNNABLE_CONSTANT = 'Runnable interface constant';
    public function run();
}

abstract class AnAbstractClass
{
    abstract public function __construct(Runnable $runnable = null);
    abstract public function publicMethod($value = null);
    abstract protected function protectedMethod();
}

class AClass extends AnAbstractClass implements Runnable
{
    const CONSTANT = 'class constant value';

    private $x;
    private $y;

    public $public = 'Public';
    protected $protected = 'Protected';
    private $private = 'private';

    public static $publicStatic = 'Public static';
    protected static $protectedStatic = 'Protected static';
    private static $privateStatic = 'private static';

    private $emptyArray = array();
    private $sameLineArray = array('a', 'b', 'c');
    private $sameLineArray2 = array(10, "red", array(2.3, NULL, array(12, FALSE, "zzz")));

    public function __construct(Runnable $runnable = null) { }

    public function getX()      { return $this->x; }
    public function setX($x)    { $this->x = $x;   }
    public function getY()      { return $this->y; }
    public function setY($y)    { $this->y = $y;   }

    public function publicMethod($value = null) {echo $this->public . " statment 1\n"; echo $this->public . " statment 2\n"; }

    protected function protectedMethod() {
        echo $this->protected . " statment 1\n";
        echo $this->protected . " statment 2\n";
    }

    private function privateMethod()
    {
        echo $this->private . " statment 1\n";
        echo $this->private . " statment 2\n";
    }

    public function run()
    {
        echo self::CONSTANT . "\n";
        $this->publicMethod();
        $this->protectedMethod();
        $this->privateMethod();
        echo static::$publicStatic . "\n";
        echo self::$protectedStatic . "\n";
        echo self::$privateStatic . "\n";
        return $this;
    }
}

$aClass = new AClass();
$aClass->run();
$aClass::$publicStatic . "\n";
echo AClass::CONSTANT . "\n";

interface i1 {}
interface i2 extends i1 {}
abstract class a1 {}
class c {}
final class c_f {}
class c_i implements i1 {}
class c_i2 implements i1, i2 {}
class c_a extends a1 {}
class c_a_i extends a1 implements i1 {}
class c_a_i2 extends a1 implements i1, i2 {}
