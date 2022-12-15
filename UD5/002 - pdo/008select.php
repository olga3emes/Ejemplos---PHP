<?php
//  consulta con array asociativo
include "config/conexion.php";
$conexion = null;

try {
    $conexion = new PDO(DSN, USUARIO, PASSWORD);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "select * from tienda";

    $sentencia = $conexion->prepare($sql);
    $sentencia->setFetchMode(PDO::FETCH_ASSOC);
    $sentencia->execute();

    while ($fila = $sentencia->fetch()) {
        echo "Codigo:" . $fila["cod"] . "<br />";
        echo "Nombre:" . $fila["nombre"] . "<br />";
        echo "Teléfono:" . $fila["tlf"] . "<br />";
    }

    /*
    $sentencia = $conexion->prepare($sql);
    $sentencia->setFetchMode(PDO::FETCH_ASSOC);
    $sentencia->execute();
    $tiendas = $sentencia->fetchAll();
    foreach ($tiendas as $tienda) {
    echo "Codigo:" . $tienda["cod"] . "<br />";
    echo "Nombre:" . $tienda["nombre"] . "<br />";
    }
    */

/*    $sentencia = $conexion->prepare($sql);
    $sentencia->setFetchMode(PDO::FETCH_OBJ);
    $sentencia->execute();

    while ($t = $sentencia->fetch()) {
        echo "Codigo:" . $t->cod . "<br />";
        echo "Nombre:" . $t->nombre . "<br />";
        echo "Teléfono:" . $t->tlf . "<br />";
    }

*/

} catch (PDOException $e) {
    echo $e->getMessage();
}

$conexion = null;