<?php
include_once("../ej7/Producto2.php");
$p2 = new Producto2("Nintendo DS");

if ($p2 instanceof Producto2) {
    echo "Es un producto <br>";
    echo "La clase es " . get_class($p2) . "<br>";

    //TODO: Ver qué pasa con el class_alias
   
    class_alias("Articulo", "Producto2");
    $prod = new Articulo("Wii U");
    echo "Un producto es un " . get_class($prod);

    print_r(get_class_methods("Producto2"));
    print_r(get_class_vars("Producto2"));
    print_r(get_object_vars($p2));

    echo "<br>";

    if (method_exists($prod, "mostrarResumen")) {
        $prod->mostrarResumen();
    }
}

