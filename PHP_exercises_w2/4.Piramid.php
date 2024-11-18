<?php

function imprimirPiramide($altura) {
    for ($i = 1; $i <= $altura; $i++) {
        // Imprimir espacios en blanco para centrar la pirámide
        for ($j = $i; $j < $altura; $j++) {
            echo " ";
        }
        for ($k = 1; $k <= (2 * $i - 1); $k++) {
            echo "*";
        }
        echo "\n";
    }
}

$altura = 5;
imprimirPiramide($altura);
?>