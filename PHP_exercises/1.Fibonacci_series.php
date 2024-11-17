<?php

/* ## Fibonacci Series ## 

Escribe una función llamada generar Fibonacci
que reciba un número n como parámetro y genere
los primeros n términos de la serie Fibonacci.
La serie comienza con 0 y 1, y cada término subsiguiente
es la suma de los dos anteriores. */

function generarFibonacci($n){
    $fibonacciSecuence = array(0,1);
    for ($i=1; $i<$n; $i++){
    $last = end($fibonacciSecuence);
    $prev = prev($fibonacciSecuence);
    $product = $prev + $last;
    array_push($fibonacciSecuence,$product);
    };
    print_r($fibonacciSecuence);
};


generarFibonacci(10);
?>