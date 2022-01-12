<?php
function timMin($arr)
{
    $min = $arr[0];
    for ($i = 0; $i < count($arr); $i++) {
        if ($min > $arr[$i]) {
            $min = $arr[$i];
        }
    }
    return $min;
}

$arr = [9, 29, 37, 45, 5, 6, 7, 8];
echo "so be nhat la: " . timMin($arr);
?>