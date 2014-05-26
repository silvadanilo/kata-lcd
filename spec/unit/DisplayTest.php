<?php

class DisplayTest extends \PHPUnit_Framework_TestCase
{
    public function testDisplayDigit1ReturnsRightArrayOfSymbols()
    {
        $display = new Display();
        $this->assertEquals(["    ", "   |", "   |", "    ", "   |", "   |", "    "], $display->draw(1));
    }

    public function testDisplayDigit2ReturnsRightArrayOfSymbols()
    {
        $display = new Display();
        $this->assertEquals([" -- ", "   |", "   |", " -- ", "|   ", "|   ", " -- "], $display->draw(2));
    }

    public function testDisplayDigit4ReturnsRightArrayOfSymbols()
    {
        $display = new Display();
        $this->assertEquals([
            "    ",
            "|  |",
            "|  |",
            " -- ",
            "   |",
            "   |",
            "    "
        ], $display->draw(4));
    }

    public function testDisplayDigit12ReturnsRightArrayOfSymbols()
    {
        $display = new Display();
        $this->assertEquals([
            "    ", " -- ",
            "   |", "   |",
            "   |", "   |",
            "    ", " -- ",
            "   |", "|   ",
            "   |", "|   ",
            "    ", " -- "
        ], $display->draw(12));
    }
}
