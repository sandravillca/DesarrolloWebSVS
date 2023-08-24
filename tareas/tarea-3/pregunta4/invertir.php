<?php

$cadena = $_GET["cadena"];
echo "Cadena recibida: ".$cadena;
echo "<br>";

echo "<h1>La cadena invertida es: </h1>";
echo "<br>";

$palabras = explode(" ",$cadena);
$i = count($palabras) -1;
while( $i >= 0){
    echo $palabras[$i]."\n";
    $i--;
}

?>
