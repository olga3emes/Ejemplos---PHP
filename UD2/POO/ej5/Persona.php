<?php
class Persona{

    private String $nombre;

    public function __construct(String $nom)
    {
        $this->nombre= $nom;
    }

    public function imprimir(){
        echo $this->nombre;
        echo "<br>";
    }
}

$hector = new Persona("Héctor"); 
$hector->imprimir();
