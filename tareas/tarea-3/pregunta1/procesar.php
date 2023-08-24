<?php
include("funcion.php");

$cadena = $_GET["cadena"];
echo "cadena recibida: ".$cadena;
echo "<br>";
echo "La palabra mas larga es: ", PalabraMasLarga($cadena);

?>
