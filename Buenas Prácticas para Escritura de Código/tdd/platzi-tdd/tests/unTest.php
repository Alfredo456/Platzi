<?php

use PHPUnit\Framework\TestCase;

class unTest extends TestCase
{
    public function testTest()
    {
        $sut = new Calculator();
        $this->assertEquals(8,$sut->add(5,3));
        $this->assertEquals(5,$sut->add(5,0));
        //$this->assertTrue(true);
    }
}
