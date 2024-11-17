<?php
/* 
  Problema de Lista Invertida:
Escribe un programa que tome un array
de números y devuelva una nueva lista
que contenga los mismos elementos en orden inverso.
*/
//input
$input = array("item1", "item2", "item3");

//output
function invertedArray ($array){
    echo("Here's your input: <Br>");
    print_r($array);

    $reversed = array_reverse($array);
    echo("<Br>Here's the revresed version: <Br>");
    print_r($reversed);
};

invertedArray($input);
?>