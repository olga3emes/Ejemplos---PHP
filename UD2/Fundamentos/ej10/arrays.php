<?php
$frutas = array("naranja", "pera", "manzana");
$frutas2 = ["naranja", "pera", "manzana"];
$frutas3 = [];
$frutas3[0] = "naranja";
$frutas3[1] = "pera";
$frutas3[] = "manzana"; // lo añade al final

$tam = count($frutas); // tamaño del array 
for ($i = 0; $i < count($frutas); $i++) {
    echo "Elemento $i: $frutas[$i] <br />";
}


// Mediante foreach no necesitamos saber el tamaño del array 
foreach ($frutas as $fruta) {
    echo "$fruta <br />";
}

