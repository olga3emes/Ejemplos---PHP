<?php
class Producto2{
    const IVA = 0.21;
    private static $numProductos = 0;
    private $codigo;
    public function __construct(String $cod){

        self::$numProductos++;
        $this->codigo=$cod;
    }
    public function mostrarResumen() : String {
        return "El producto ". $this->codigo." es el número " . self::$numProductos;
    }
} // End class

$prod1 = new Producto2("PlayStation 5");
$prod2 = new Producto2("Nintengo Switch");
$prod3 = new Producto2("XBOX Series X");
$prod4 = new Producto2("Steam Deck");
echo $prod2->codigo;