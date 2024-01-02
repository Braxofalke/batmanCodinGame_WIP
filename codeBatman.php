<?php


fscanf(STDIN, "%d %d", $W, $H);
$N = intval(trim(fgets(STDIN)));
fscanf(STDIN, "%d %d", $X0, $Y0);


$minX = 0;
$maxX = $W - 1;
$minY = 0;
$maxY = $H - 1;


while (TRUE) {
    $bombDir = trim(fgets(STDIN));


    if (strpos($bombDir, 'U') !== false) {
        $maxY = $Y0 - 1;
    }
    if (strpos($bombDir, 'D') !== false) {
        $minY = $Y0 + 1;
    }
    if (strpos($bombDir, 'L') !== false) {
        $maxX = $X0 - 1;
    }
    if (strpos($bombDir, 'R') !== false) {
        $minX = $X0 + 1;
    }


    if (strpos($bombDir, 'U') !== false || strpos($bombDir, 'D') !== false) {
        $Y0 = intval(($minY + $maxY) / 2);
    }
    if (strpos($bombDir, 'L') !== false || strpos($bombDir, 'R') !== false) {
        $X0 = intval(($minX + $maxX) / 2);
    }


    echo("$X0 $Y0\n");
}

