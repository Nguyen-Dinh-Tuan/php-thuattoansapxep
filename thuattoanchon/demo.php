<?php
$mang = array(1,4,5,89,6,44,9);
function selectionSort($arr)
{
    for ($i = 0;$i< count($arr); $i++){
        $min = $i;
        for ($j = $i + 1; $j< count($arr); $j++){
            if ($arr[$j] < $arr[$min]){
                $min = $j;
            }
        }
        if (($min != $i)){
            $tmp = $arr[$i];
            $arr[$i] = $arr[$min];
            $arr[$min] = $tmp;
        }
    }
    return $arr;
}
print_r(selectionSort($mang));