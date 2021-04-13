<?php

$count = 0;
function factorial($n): int{
    global $count;
    $count++;
    if ($n <= 1) return 1;

    return factorial($n - 1) * $n;
}

//echo factorial(10), "  " . $count;

$n = 500;
$array[]= [];

$count = 0;
for ($i = 0; $i < $n; $i++) {
    for ($j = $i; $j < $n; $j++) {
        $array[$i][$j]= true;
        $count++;
    }
}

echo "$n, $count, " . $n*$n . " " . $n * log($n, 2);
