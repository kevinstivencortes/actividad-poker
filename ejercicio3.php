<?php 

$numero = [55, 89, 2, 43, 4384, 2143,43];

function ordenarArray($n){

   for($i = 0; $i < count($n) -1; $i++){
    for($j = 0; $j < count($n) -1 -$i; $j++){
        if($n[$j] > $n[$j + 1]){
            $a = $n[$j];
            $n[$j] = $n[$j + 1];
            $n[$j + 1] = $a;
        }
    }
}
return $n;

}

$res = ordenarArray($numero);

print_r($res);

?> 