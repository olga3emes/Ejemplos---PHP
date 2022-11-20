<?php
do {
    $dado = rand(1, 6);
    // rand() devuelve un valor aleatorio
    echo "Jugando al parchís...";
    echo "Tirando el dado... ";
    echo "ha salido un " . $dado . ".";
    echo "<br>";
} while ($dado != 5);
echo "¡Bien! Saco una ficha de casa.";
?>