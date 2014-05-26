<?php

class Display
{
    private $intToSymbols = [
        1 => ['nothing', 'right', 'nothing', 'right', 'nothing'],
        2 => ['line', 'right', 'line', 'left', 'line'],
        4 => ['nothing', 'borders', 'line', 'right', 'nothing'],
    ];

    public function draw($number)
    {
        $digits = [];
        foreach (str_split($number) as $i => $intDigit) {
            $digits[$i] = $this->drawDigit($intDigit);
        }

        $results = $this->enqueueDigitsStings($digits);

        return $results;
    }

    private function drawDigit($intDigit)
    {
        $symbols = [];

        foreach ($this->intToSymbols[$intDigit] as $singleSymbol) {
            $className = ucfirst(strtolower($singleSymbol));
            $symbol = new $className();
            foreach ($symbol->draw() as $s) {
                $symbols[] = $s;
            }
        }

        return $symbols;
    }

    private function enqueueDigitsStings($digits)
    {
        $results = [];

        for ($line = 0; $line < 7; $line++) {
            for ($i = 0; $i < count($digits); $i++) {
                $results[] = $digits[$i][$line];
            }
        }

        return $results;
    }
}
