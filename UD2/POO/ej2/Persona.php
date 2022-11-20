<?php
class Persona{

    private String $nombre;

    public function setNombre(String $nom){
        $this -> nombre=$nom;
    }

    public function imprimir(){
        echo $this->nombre;
        echo "<br>";
    }

  
    public function getNombre()
    {
        return $this->nombre;
    }
}

/*$hector = new Persona();
$hector->setNombre("Héctor");
$hector->imprimir();
