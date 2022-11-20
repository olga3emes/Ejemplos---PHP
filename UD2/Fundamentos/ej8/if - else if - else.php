<?php
$hora = 14; // La hora en formato de 24 horas 
if ($hora === 8) {
    echo "Es la hora de desayunar.";
}
else if ($hora === 14) {
    echo "Es la hora de la comida.";
}
else if ($hora === 21) {
    echo "Es la hora de la cena.";
}
else {
    echo "Ahora no toca comer.";
}
?>