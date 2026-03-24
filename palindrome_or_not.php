<?php

$n = 121;
$org = $n;
$rev = 0;
while ($n > 0) {
    $rev = $rev * 10 + $n % 10;
    $n = (int)($n % 10);
}
if ($org == $rev)
    echo "Pallindrome hai ";
else {

    echo "Pallindrome nahi hai";
}
