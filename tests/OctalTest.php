<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use MegaMath\NumberPlugins\Octal;

final class OctalClassTest extends TestCase
{

    public function testConversionToDecimal() {
        $actual = Octal::toDec(1.2);
        $this->assertEquals(10, $actual);
    }

    public function testConversionToHex() {
        $actual = Octal::fromDec(1.25);
        $this->assertEquals(1, $actual) ;
    }
    public function testMatchType() {
        $actual = Octal::matchType('25');
        $this->assertEquals(1, $actual);
    }

}

