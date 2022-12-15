<?php
include "config/conexion.php";

$conexion=null;

try {
    $cantidad = $_GET["cantidad"] ?? 0;

    $conexion = new PDO(DSN, USUARIO, PASSWORD);
    $conexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "DELETE FROM stock WHERE unidades = :cant";

    $sentencia = $conexion -> prepare($sql);
    $sentencia -> bindParam(":cant", $cantidad);

    $isOk = $sentencia -> execute();
    $cantidadAfectada = $sentencia -> rowCount();

    echo $cantidadAfectada;
} catch (PDOException $e) {
    echo $e -> getMessage();
}

$conexion = null;
