<?php
function miCiudad()
{
    global $ciudad;
    $ciudad = "Elche";
    echo "Dentro de la función: $ciudad.<br>";
}

$ciudad = "Alicante";
echo "Antes de llamar: $ciudad.<br>";
miCiudad();
echo "Después de llamar: $ciudad.<br>"
    ?>