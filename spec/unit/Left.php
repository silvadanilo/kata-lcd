<?php

class LeftTest extends \PHPUnit_Framework_TestCase
{
    public function testDraw()
    {
        $line = new Left();
        $this->assertEquals(['|   ', '|   '], $line->draw());
    }
}

