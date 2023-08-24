<?php
$numeros = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20);

echo "<h1>Numeros pares en el arreglo</h1>";
foreach($numeros as $numero)
{
    $pares = array();

    if($numero % 2 == 0){
        array_push($pares, $numero);
        echo $numero;
        echo "<br>";
    }    
}

echo "<h1>Numeros impares en el arreglo</h1>";
foreach($numeros as $numero)
{
    $impares = array();

    if($numero % 2 != 0){
        array_push($impares, $numero);
        echo $numero;
        echo "<br>";
    }    
}
