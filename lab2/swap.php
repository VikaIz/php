<?php
declare(strict_types=1);

$swap = function (&$x, &$y): void {
    [$x, $y] = [$y, $x];
};

$a = 5;
$b = 8;

echo "До обмена: a = $a, b = $b<br>";
$swap($a, $b);
echo "После обмена: a = $a, b = $b<br>";