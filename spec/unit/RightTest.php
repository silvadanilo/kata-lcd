<?php

class RightTest extends \PHPUnit_Framework_TestCase
{
    public function testDraw()
    {
        $line = new Right();
        $this->assertEquals(['   |', '   |'], $line->draw());
    }
}


