<?php
function timMin($arr){
    $min = $arr[0];
    $index = 0;
    for ($i=0;$i<count($arr);$i++){
        if ($min > $arr[$i]){
            $min = $arr[$i];
            $index = $i;
        }
    }
    return $index;
}
$arr = [9,2,3,4,5,6,1,7,8,9,5];

echo "vị tri số bé nhất là: ".timMin($arr);
?>
