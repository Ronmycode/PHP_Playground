<?php
/* 
Problema de números Primos:
Crea una función llamada esPrimo que determine si un número dado es primo o no.
Un número primo es aquel que solo es divisible por 1 y por sí mismo.
*/
function esPrimo($numero) {
    
    if ($numero <= 1) {
        return "no es primo";
    }

    
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return "no es primo";
        }
    }

    
    return "Es primo";
}

echo esPrimo(7);



?>