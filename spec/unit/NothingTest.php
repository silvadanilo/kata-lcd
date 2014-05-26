<?php

class NothingTest extends \PHPUnit_Framework_TestCase
{
    public function testDraw()
    {
        $line = new Nothing();
        $this->assertEquals(['    '], $line->draw());
    }
}
