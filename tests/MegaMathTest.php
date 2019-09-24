<?php
declare(strict_types=1);


use PHPUnit\Framework\TestCase;



final class MegaMathClassTest extends TestCase
{
    protected $MegaMath;
    protected $composer;

    public function __construct() {
        parent::__construct();
        $this->MegaMath = new MegaMath();

    }

    public function testAddition() {
        $actual = $this->MegaMath->add(2, 2);
        $this->assertEquals(4, $actual);

    }

    public function testSubtraction() {
        $actual = $this->MegaMath->subtract(2, 2);
        $this->assertEquals(0, $actual);
    }

    public function testMultiplication() {
        $actual = $this->MegaMath->multiply(2, 2);
        $this->assertEquals(4, $actual);
    }

    public function testDivision() {
        $actual = $this->MegaMath->divide(10, 2);
        $this->assertEquals(5, $actual);
    }

    public function testSquareRoot() {
        $actual = $this->MegaMath->sqroot(10);
        $this->assertEquals(3.1622776601683795, $actual);
    }

    public function testExponent() {
        $actual = $this->MegaMath->exponent(2);
        $this->assertEquals(7.38905609893065, $actual);
    }

    public function testPower() {
        $actual = $this->MegaMath->power(2, 2);
        $this->assertEquals(4, $actual);

    }

    public function testSpecifyOutputType() {
        $actual = $this->MegaMath->power(2, 2, "Binary");
        $this->assertEquals(100, $actual);
    }





}
