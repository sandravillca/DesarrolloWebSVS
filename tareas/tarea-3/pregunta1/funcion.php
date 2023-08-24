<?php

function PalabraMasLarga($cadena){

        /*$palabras = preg_split('/\s+/', $cadena); // Dividir la cadena en palabras*/
    
        $palabras = explode(" ",$cadena);

        $palabra_mas_larga = " ";
        foreach ($palabras as $palabra) {
            if (strlen($palabra) > strlen($palabra_mas_larga)) {
                $palabra_mas_larga = $palabra;
            }
        }
    
        return $palabra_mas_larga;
}

?>