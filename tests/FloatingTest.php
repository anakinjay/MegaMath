<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use MegaMath\NumberPlugins\Floating;

final class FloatingClassTest extends TestCase
{

    public function testConversionToDecimal() {
        $actual = Floating::toDec(1.99999999);
        $this->assertEquals(1.99999999, $actual);
    }

    public function testConversionToFloat() {
        $actual = Floating::fromDec(1.99999999);
        $this->assertEquals(1.99999999, $actual) ;
    }
    public function testMatchType() {
        $actual = Floating::matchType(1.34324);
        $this->assertEquals(1, $actual);
    }


}

