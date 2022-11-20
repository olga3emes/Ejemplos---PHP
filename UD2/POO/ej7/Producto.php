<?php
class Producto {
    const IVA = 0.23;
    private static $numProductos = 0; 

    public static function nuevoProducto() {
        self::$numProductos++;
    }

}



Producto::nuevoProducto();
$impuesto = Producto::IVA;

echo $impuesto;