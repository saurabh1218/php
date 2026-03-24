<?php
$arr = [10, 20, 10, 30, 20, 40];
$new = [];

for ($i = 0; $i < count($arr); $i++) {
    $flag = 0;
    for ($j = 0; $j < count($new); $j++) {
        if ($arr[$i] == $new[$j]) {
            $flag = 1;
            break;
        }
    }
    if ($flag == 0) {
        $new[] = $arr[$i];
    }
}
print_r($new);
