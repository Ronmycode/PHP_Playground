<?php
function frecuenciaDeCaracteres($cadena) {
    $frecuencia = [];

    // loop en la cadena
    for ($i = 0; $i < strlen($cadena); $i++) {
        $caracter = $cadena[$i];

        
        if (isset($frecuencia[$caracter])) {
            $frecuencia[$caracter]++;
        } else {
           
            $frecuencia[$caracter] = 1;
        }
    }

    return $frecuencia;
}


$texto = "go beyond plus ultra";
$resultado = frecuenciaDeCaracteres($texto);
print_r($resultado);
?>
