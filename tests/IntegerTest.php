<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use MegaMath\NumberPlugins\Integer;

final class IntegerClassTest extends TestCase
{

    public function testConversionToDecimal() {
        $actual = Integer::toDec(1);
        $this->assertEquals(1.0, $actual);
    }

    public function testConversionToInteger() {
        $actual = Integer::fromDec(1.34543);
        $this->assertEquals(1, $actual) ;
    }

    public function testMatchType() {
        $actual = Integer::matchType(7);
        $this->assertEquals(1, $actual);
    }


}

