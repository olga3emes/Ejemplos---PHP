<?php
$x = 33;
$y = 11;
$z = $x + $y;
echo "La suma de 33 y 11 es ".(44)."<br />";
echo "La suma de ".$x." y ".$y." es ".(33 + 11)."<br />";
echo "La suma de ".$x." y ".$y." es ".$z."<br />";

/*Realmente, en vez de concatenar cadenas con variables, podemos imprimirlas directamente ya 
que se expanden automáticamente:
*/

echo "La suma de $x y $y es $z <br />"; 

/*En ocasiones, necesitamos rodear el nombre de la variable entre llaves para poder unir más 
texto al resultado:*/

$color = "rojo";
if($color == "azul"){
    echo "El plural de $color es ${color}es"; 
}else{
    echo "El plural de $color es ${color}s"; 
}

// Más adelante estudiaremos algunas funciones para el tratamiento de cadenas.
?>

