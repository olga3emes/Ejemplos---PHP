<?php
$hora = 17; // La hora en formato de 24 horas 
if ($hora <= 12) {
    echo "Son las " . $hora . " de la mañana";
}
else {
    echo "Son las " . ($hora - 12) . " de la tarde";
}
?>