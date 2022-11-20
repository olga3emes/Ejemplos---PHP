<?php
class Prod{
    public function __construct(private string $codigo) { }
    public function mostrarResumen() {
        echo "<p>Prod:".$this->codigo."</p>";
    }        
}
class Tele extends Prod{
    public function __construct(
        String $codigo,
        private int $pulgadas,
        private String $tecnologia){
        parent::__construct($codigo);
    }
    public function mostrarResumen() {
        parent::mostrarResumen();
        echo "<p>TV ".$this->tecnologia." de ".$this->pulgadas."</p>";
    }
}
