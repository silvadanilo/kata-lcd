<?php

include 'Display.php';
include 'Nothing.php';
include 'Borders.php';
include 'Line.php';
include 'Left.php';
include 'Right.php';

$display = new Display();
$i = 0;
foreach($display->draw($argv[1]) as $symbol) {
    echo $symbol;
    if (0 == ($i % 4)) {
        echo "\n";
    }
}
