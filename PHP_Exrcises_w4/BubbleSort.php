<?php
//Problema de Ordenar Lista con Bubble Sort:
/* Escribe un programa que ordene una lista de
números de forma descendente utilizando el algoritmo Bubble Sort.
La lista puede contener duplicados y valores negativos.
Asegúrate de manejar estos casos y muestra la lista antes y después
de aplicar el algoritmo. */


function bubbleSortDescending($arr) {
    $n = count($arr);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($arr[$j] < $arr[$j + 1]) {
                // Intercambiar
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
    return $arr;
}


$list = [3, -1, 4, -1, 5, 9, -2];
echo "Lista antes de ordenar: " . implode(", ", $list) . "\n";
$sortedList = bubbleSortDescending($list);
echo "Lista después de ordenar: " . implode(", ", $sortedList) . "\n";




?>