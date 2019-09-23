<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use MegaMath\NumberPlugins\Hex;

final class HexClassTest extends TestCase
{

    public function testConversionToDecimal() {
        $actual = Hex::toDec('3c');
        $this->assertEquals(60, $actual);
    }

    public function testConversionToHex() {
        $actual = Hex::fromDec(60);
        $this->assertEquals('3c', $actual) ;
    }

    public function testMatchType() {
        $actual = Hex::matchType('3f');
        $this->assertEquals(1, $actual);
    }


}

