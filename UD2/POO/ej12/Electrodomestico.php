<?php
class Electrodomestico{
    private $codigo;
    public function getCodigo(){
        return $this->codigo;
    }
    final public function mostrarResumen(): String {
        return "Producto ".$this->codigo;
    }
}


