<?php
class Articulo{
    const IVA = 0.21;
    private static $numProductos =0;
    private $codigo;
    public function __construct(String $cod){

        self::$numProductos++;
        $this->codigo=$cod;
    }
    public function mostrarResumen() : String {
        return "El producto ". $this->codigo." es el número " . self::$numProductos;
    }
} // End class

$prod1 = new Articulo("PlayStation 5");
$prod2 = new Articulo("Nintengo Switch");
$prod3 = new Articulo("XBOX Series X");
$prod4 = new Articulo("Steam Deck");
echo $prod2->mostrarResumen();