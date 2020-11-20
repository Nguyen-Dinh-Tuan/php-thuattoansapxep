<?php
$mang = array(1,5,9,2,4,9);
$sophantu = 6;

for ($i=0; $i < ($sophantu - 1); $i++){
    for ($j = $i +1; $j < $sophantu; $j++){
        if ($mang[$i] > $mang[$j]){
            $tmp = $mang[$j];
            $mang[$j] = $mang[$i];
            $mang[$i] = $tmp;

        }
    }

}
for ($i=0; $i< $sophantu; $i++){
    echo $mang[$i]. ' ';
}


