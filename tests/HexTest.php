<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class HexClassTest extends TestCase
{

    public function testEmptyArray() {
        $stack = [];
        $this->assertEmpty($stack);
        return $stack;
    }

    /**
     * @depends testEmptyArray
     */
    public function testAddingToArray(array $stack) {
        array_push($stack,'foo');
        $this->assertSame('foo', $stack[0]);
        $this->assertNotEmpty($stack);
        return $stack;

    }

    /** @depends testAddingToArray */
    public function testPopOffArray(array $stack) {
        $this->assertSame('foo', array_pop($stack));
        $this->assertEmpty($stack);
    }

    public function testHexStuff() {
        $this->assertEquals(
            'stuff',
            Hex::returnStuff()
        );
    }
}

