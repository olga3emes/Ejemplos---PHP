<?php
$anonima = function() {
    echo "Hola";
};
$anonima();

$anonimaConParametro = function($nombre) {
    echo "Hola ".$nombre;
};
$anonimaConParametro("Olga");

// Uso de variables externas a la función anónima --> `use`
$mensaje = "Hola";
$miClosure = function() use ($mensaje) {
    echo $mensaje;
};
$miClosure();

// Uso de parámetros
$holaPHP = function($arg) use ($mensaje) {
    echo $mensaje." ".$arg;
};
$holaPHP("PHP");
?>
