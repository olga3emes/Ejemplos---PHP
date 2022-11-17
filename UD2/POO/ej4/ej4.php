<?php
include_once("../ej3/MayorMenor.php");
function mayormenor(array $nums) : ?MayorMenor{
    $a = max($nums);
    $b = min($nums);

    $res = new MayorMenor();
    $res->setMayor($a);
    $res->setMenor($b);
    return $res;
}

$resultado= mayormenor([2,58,6,389,35,39,27,42,22]);
echo "<br> Mayor: ". $resultado->getMayor();
echo "<br>Menor: ". $resultado->getMenor();
