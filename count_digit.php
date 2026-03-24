<?php

$n = 2486;
$count = 0;
while ($n > 0) {
    $n = (int)($n / 10);
    $count++;
}
echo "digit=$count";
