<?php

function esPalindromo($cadena) {
    // Remover espacios, puntuación y convertir a minúsculas para evitar diferencias de caso
    $cadenaLimpia = preg_replace('/[^a-zA-Z0-9]/', '', strtolower($cadena));
    
    // Comparar la cadena original con su reverso
    if ($cadenaLimpia === strrev($cadenaLimpia)) {
        return "Es un palíndromo";
    } else {
        return "No es un palíndromo";
    }
}


$texto = "Anita lava la tina";
echo esPalindromo($texto);

?>