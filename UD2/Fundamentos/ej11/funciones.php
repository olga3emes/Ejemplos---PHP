<?php
function diaSemana()
{
    $semana = ["lunes", "martes", "miércoles",
        "jueves", "viernes", "sábado", "domingo"];
    $dia = $semana[rand(0, 6)];
    return $dia;
}
$diaCine = diaSemana();
echo "El próximo $diaCine voy al cine.";
?>