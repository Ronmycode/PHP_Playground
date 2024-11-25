<?php
/* Problema de Ordenar Lista con Insertion Sort:
Crea un script que ordene una lista de nombres en orden alfabético
utilizando el algoritmo Insertion Sort. Muestra la lista antes y después
de aplicar el algoritmo. */

function insertionSort($arr) {
    $n = count($arr);
    for ($i = 1; $i < $n; $i++) {
        $key = $arr[$i];
        $j = $i - 1;


        while ($j >= 0 && $arr[$j] > $key) {
            $arr[$j + 1] = $arr[$j];
            $j--;
        }
        $arr[$j + 1] = $key;
    }
    return $arr;
}


$list = ["Carlos", "Ana", "Pedro", "Juan", "María"];
echo "Lista antes de ordenar: " . implode(", ", $list) . "\n";
$sortedList = insertionSort($list);
echo "Lista después de ordenar: " . implode(", ", $sortedList) . "\n";
?>
