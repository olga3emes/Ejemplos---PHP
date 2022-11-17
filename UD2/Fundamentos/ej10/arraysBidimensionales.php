<?php
$persona["nombre"] = "Bruce Wayne";
$persona["telefonos"] = ["966 123 456", "636 636 636"]; // array de arrays ordinarios
$persona["profesion"] =
["dia" => "filántropo", "noche" => "caballero oscuro"]; // array de arrays asociativos
echo $persona['nombre'] . " por la noche trabaja de " . $persona['profesion']['noche'];

/*Combinando los arrays asociativos en varias dimensiones podemos almacenar la información 
 como si fuera una tabla:*/
$menu1 = ["Plato1" => "Macarrones con queso", "Plato2" => "Pescado asado", "Bebida" => "Coca-Cola", "Postre" => "Helado de chocolate"];
$menu2 = ["Plato1" => "Sopa", "Plato2" => "Lomo con patatas", "Bebida" => "Agua", "Postre" => "Arroz con leche"];
$menus = [$menu1, $menu2]; // creamos un array a partir de arrays asociativos

foreach ($menus as $menudeldia) {
    echo "Menú del día<br/>";

    foreach ($menudeldia as $platos => $comida) {
        echo "$platos: $comida <br/>";
    }
}

// Para acceder a un elemento concreto se anidan los corchetes
$postre0 = $menus[0]["Postre"];