<?php
require __DIR__.'/../vendor/autoload.php';
use Tools\Calculator;

class CalculactorTest extends PHPUnit_Framework_TestCase {

    public function testAdd() {
        $calculator = new Calculator();
        $result = $calculator->add(2, 3);
        $this->assertEquals($result, 5);

        $result = $calculator->add(10, 3);
        $this->assertNotEquals($result, 7);
    }

    public function testSubtract() {
        $calculator = new Calculator();
        $result = $calculator->subtract(2, 3);
        $this->assertEquals($result, -1);

        $result = $calculator->add(10, 3);
        $this->assertNotEquals($result, 7);
    }

    public function testDivide() {
        $calculator = new Calculator();
        $result = $calculator->divide(10, 2);
        $this->assertEquals($result, 5);
    }

    public function testDivideByZero() {
        $calculator = new Calculator();
        $result = $calculator->divide(10, 0);
        $this->assertEquals($result, false);
    }

    public function testDoMath() {
        $calculator = new Calculator();
        $result = $calculator->doSomeMath(5, 11, 8);
        $this->assertEquals($result, 2);
    }

    public function testNumberGreaterOrEqual() {
        $calculator = new Calculator();
        $result = $calculator->numberGreaterOrEqual(55, 11);
        $this->assertEquals($result, true);

        $result = $calculator->numberGreaterOrEqual(55, 55);
        $this->assertEquals($result, true);

        $result = $calculator->numberGreaterOrEqual(55, 111);
        $this->assertEquals($result, false);
    }
}