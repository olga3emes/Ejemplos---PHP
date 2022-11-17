<?php
$frase = "Quien busca encuentra, eso dicen, a veces";
$partes = explode(",", $frase);

print_r($partes) ;

echo "<br>";

$ciudades = ["Elche", "Valencia", "Alicante"];
$cadenaCiudades = implode(">", $ciudades);
echo $cadenaCiudades;

$partes3cadena = chunk_split($frase, 3);
// Qui 
// en 
// bus 
// ca 
// ...

echo "<br>";
echo $partes3cadena;

$partes3array = str_split($frase, 3);
// ["Qui", "en ", "bus", "ca ", "enc", …] 

echo "<br>";
print_r( $partes3array);


$batman = "Bruce Wayne es Batman";
$empresa = substr($batman, 6, 5); // Wayne
$bes = substr_count($batman, "B"); // 2
// Bruce Wayne es camarero
$camarero1 = substr_replace($batman, "camarero", 15);

$camarero2 = substr_replace($batman, "camarero", -6); // quita 6 desde el final
// Bruno es Batman
$bruno = substr_replace($batman, "Bruno", 0, 11);

echo $bruno;

?>

