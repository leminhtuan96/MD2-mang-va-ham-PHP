<?php
function timMax($arr){
    $max = $arr[0][0];
    for ($i = 0;$i <count($arr);$i ++){
        for ($j = 0; $j < count($arr[$i]);$j++){
            if ($max < $arr[$i][$j]){
                $max = $arr[$i][$j];
            }
        }
    }
    return $max;
}

$arr = [
    [2,4,6,7],
    [10,11,2],
    [4,20,9,16],
    [30,3,49,100]
];

echo "giá trị lớn nhất là: ".timMax($arr);



?>