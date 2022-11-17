<?php
$nombre= "Olga";
$moneda="moneda";
echo "Me llamo $nombre <br>";
echo "Son 30 ${moneda}s <br>";

$cadena = "Yo soy Batman";
$ygriega = $cadena[0];

echo $cadena;
echo "<br>";
echo $ygriega;
echo "<br>";

$num = 221;
$nombre = "Baker Street";
printf("Sherlok Holmes vivía en el número %db de %s",  $num, $nombre);
echo "<br>"; // %d -> número decimal, %s -> string
$frase = sprintf("Sherlok Holmes vivía en el número %db de %s",  $num, $nombre);
echo $frase;

