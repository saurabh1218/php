<?php
$n = 7894;
$rev = 0;
while ($n != 0) {
    $digit = $n % 10;
    $rev = $rev * 10 + $digit;
    $n = (int) ($n / 10);
}
echo $rev;
