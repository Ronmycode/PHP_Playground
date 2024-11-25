<?php
/* Problema de Ordenar Lista con Merge Sort:
Implementa una función que ordene una lista de 
palabras alfabéticamente utilizando el algoritmo Merge Sort.
Muestra la lista antes y después de aplicar el algoritmo. */

function mergeSort($arr) {
    if (count($arr) <= 1) {
        return $arr;
    }
    
    $middle = floor(count($arr) / 2);
    $left = array_slice($arr, 0, $middle);
    $right = array_slice($arr, $middle);

    return merge(mergeSort($left), mergeSort($right));
}

function merge($left, $right) {
    $result = [];
    while (count($left) > 0 && count($right) > 0) {
        if ($left[0] <= $right[0]) {
            $result[] = array_shift($left);
        } else {
            $result[] = array_shift($right);
        }
    }
    return array_merge($result, $left, $right);
}


$list = ["manzana", "pera", "banana", "kiwi", "uva"];
echo "Lista antes de ordenar: " . implode(", ", $list) . "\n";
$sortedList = mergeSort($list);
echo "Lista después de ordenar: " . implode(", ", $sortedList) . "\n";

?>