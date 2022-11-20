<?php
function obtenerCapital($pais="todos")
{
    $capitales = array("Italia" => "Roma",
        "Francia" => "Paris",
        "Portugal" => "Lisboa");

    if($pais == "todos"){
        return array_values($capitales);
    }else{
        return $capitales[$pais];
    }
    
}

print_r(obtenerCapital());
echo "<br/>";
echo obtenerCapital("Francia");

echo "<br/>";
function saluda($nombre, $prefijo = "Sr") {
    echo "Hola ".$prefijo." ".$nombre;
}

saluda("Héctor", "Mr");
saluda("Héctor");
saluda("Olga", "Srta");
