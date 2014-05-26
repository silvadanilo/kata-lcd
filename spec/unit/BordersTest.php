<?php

class BordersTest extends \PHPUnit_Framework_TestCase
{
    public function testDraw()
    {
        $line = new Borders();
        $this->assertEquals(['|  |', '|  |'], $line->draw());
    }
}
