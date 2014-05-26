<?php

class LineTest extends \PHPUnit_Framework_TestCase
{
    public function testDraw()
    {
        $line = new Line();
        $this->assertEquals([' -- '], $line->draw());
    }
}
