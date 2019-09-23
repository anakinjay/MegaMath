<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use MegaMath\NumberPlugins\Binary;

final class BinaryClassTest extends TestCase
{

    public function testConversionToDecimal() {
        $actual = Binary::toDec(100110101);
        $this->assertEquals(309, $actual);
    }

    public function testConversionToBinary() {
        $actual = Binary::fromDec(309);
        $this->assertEquals(100110101, $actual) ;
    }
    
    public function testMatchType() {
        $actual = Binary::matchType("01011010");
        $this->assertEquals(1, $actual);
    }


}

