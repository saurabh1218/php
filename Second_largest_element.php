<?php
$array = array(10, 20, 15, 8, 20, 5);
$n = count($array);

$largest = $second = PHP_INT_MIN;

for ($i = 0; $i < $n; $i++) {
    if ($array[$i] > $largest) {
        $second = $largest;
        $largest = $array[$i];
    } elseif ($array[$i] > $second && $array[$i] != $largest) {
        $second = $array[$i];
    }
}

if ($second == PHP_INT_MIN) {
    echo "No second largest element";
} else {
    echo "Second largest element: " . $second;
}
