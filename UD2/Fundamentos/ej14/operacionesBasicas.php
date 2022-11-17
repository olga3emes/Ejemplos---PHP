<?php
$cadena = "El caballero oscuro";
$tam = strlen($cadena);
echo "La longitud de '$cadena' es: $tam <br />";

$oscuro = substr($cadena, 13); // desde 13 al final
$caba = substr($cadena, 3, 4); // desde 3, 4 letras
$katman = str_replace("c", "k", $cadena);
echo "$oscuro $caba ahora es $katman";

echo "Grande ".strtoupper($cadena);

function despues(string $letra): string {
    $asciiLetra = ord($letra);
    return chr($asciiLetra + 1);
}

echo despues("B");


$cadena = " Programando en PHP ";
$limpia = trim($cadena); // "Programando en PHP"
$sucia = str_pad($limpia, 23, "."); // "Programando en PHP....."

echo "<br>" . $sucia;


//Comparando 


$frase1 = "Alfa";
$frase2 = "Alfa";
$frase3 = "Beta";
$frase4 = "Alfa5";
$frase5 = "Alfa10";
//TODO: REVISAR
var_dump( $frase1 == $frase2 ); // true
var_dump( $frase1 === $frase2 ); // true
var_dump( strcmp($frase1, $frase2) ); // 0

//A nivel binario
var_dump( strncmp($frase1, $frase5, 3) ); // 0

//Se compara caracter a carácter de 0 al tamaño
var_dump($frase2 < $frase4); // true 

var_dump(strcmp($frase2, $frase3) ); // -1

var_dump( $frase4 < $frase5 ); // false

var_dump(strcmp($frase4, $frase5) ); // 4 → f4 > f5

//Compara tamaños 0 =,1 mayor,-1 menor
var_dump(strnatcmp($frase4, $frase5) ); // -1 → f4 < f5



//Buscando
$frase = "Quien busca encuentra, eso dicen, a veces";
$pos1 = strpos($frase, ","); // encuentra la primera coma
$pos2 = strrpos($frase, ","); // encuentra la última coma
$trasComa = strstr($frase, ","); // ", eso dicen, a veces"

//Averiguar el contenido

$prueba1 = "hola";
$prueba2 = "hola33";
$prueba3 = "33";
$prueba4 = ",.()[]";
$prueba5 = " ,.()[]";

echo ctype_alpha($prueba)."<br>"; // true
echo ctype_alnum($prueba2)."<br>"; // true
echo ctype_digit($prueba3)."<br>"; // true
echo ctype_punct($prueba4)."<br>"; // true
echo ctype_space($prueba5)."<br>"; // false
echo ctype_space($prueba5[0])."<br>"; // true
