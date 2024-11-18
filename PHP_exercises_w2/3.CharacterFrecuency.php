<?php


function characterFrecuancy($cadena) {
    $frecuency= [];

    // Iterar sobre cada carácter en la cadena
    for ($i = 0; $i < strlen($cadena); $i++) {
        $caracter = $cadena[$i];
        if (isset($frecuency[$caracter])) {
            $frecuency[$caracter]++;
        } else {
            $frecuency[$caracter] = 1;
        }
    }

    return $frecuency;
}


$cadena = "ejemplo de prueba";
$resultado = characterFrecuancy($cadena);

print_r($resultado);
?>