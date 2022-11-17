<?php
function miCiudad()
{
    $ciudad = "Elche";
    echo "Dentro de la función: $ciudad.<br>";
}

$ciudad = "Alicante";
echo "Antes de la función: $ciudad.<br>";
miCiudad();
echo "Después de la función: $ciudad.<br>"
    ?>