<?php
class Item {
    public $codigo;
    public $nombre;
    public $nombreCorto;
    public $PVP;

    public function mostrarResumen() {
        echo "<p>Item: ".$this->codigo."</p>";
    }
}

class Tv extends Item {
    public $pulgadas;
    public $tecnologia;

   
    /* SOBRESCRIBIR UN MÉTODO DEL PADRE:*/
   
    public function mostrarResumen() {
        parent::mostrarResumen();
        echo "<p>TV ".$this->tecnologia." de ".$this->pulgadas."</p>";
     }

}

$t = new Tv();
$t->codigo = 33;
$t->pulgadas="45";
$t->tecnologia="QLED";
if ($t instanceof Item) {
    echo $t->mostrarResumen();
}
/*
$padre = get_parent_class($t);
echo "<br>La clase padre es: " . $padre;
$objetoPadre = new $padre;
echo $objetoPadre->mostrarResumen();

if (is_subclass_of($t, 'Item')) {
    echo "<br>Soy un hijo de Item";
}*/

