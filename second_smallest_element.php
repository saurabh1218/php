<?php

$array = array(10, 20, 5, 8, 20, 15);
$n = count($array);

$smallest = $second = PHP_INT_MAX;

for ($i = 0; $i < $n; $i++) {
    if ($array[$i] < $smallest) {
        $second = $smallest;
        $smallest = $array[$i];
    } elseif ($array[$i] < $second && $array[$i] != $smallest) {
        $second = $array[$i];
    }
}

if ($second == PHP_INT_MAX) {
    echo "No Second Smallest element";
} else {
    echo "Second Smallest element: " . $second;
}
