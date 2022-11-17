<?php
$frutas = ["naranja", "pera", "manzana"];
array_push($frutas, "piña");
print_r($frutas);
$ultFruta = array_pop($frutas);
if (in_array("piña", $frutas)) {
    echo "<p>Queda piña</p>";
}
else {
    echo "<p>No queda piña</p>";
}
print_r($frutas);


$capitales = array("Italia" => "Roma",
    "Francia" => "Paris",
    "Portugal" => "Lisboa");
$paises = array_keys($capitales);
print_r($paises);
sort($paises);
print_r($paises);
unset($capitales["Francia"]);
print_r($capitales);

//La copia de arrays es muy constosa a nivel de memoria
$nombres = ["Juan", "Ana", "Pedro", "Laura"];
$copia = $nombres;
sort($nombres);
print_r($nombres);
print_r($copia);

