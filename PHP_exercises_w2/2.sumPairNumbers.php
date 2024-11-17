<?php
/* Problema de Suma de Números Pares:
Crea un script que sume todos los números pares en
un array de números enteros.*/

$input = array(1,2,3,4,5,6,7,8,9);

function sumPairNumbers($array){
    $sum=0;
    foreach ($array as $element) {
       if ($element % 2 == 0){
        $sum += $element;
       }
    }
    return $sum;
}


print_r(sumPairNumbers($input));


?>