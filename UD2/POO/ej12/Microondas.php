<?php
include_once("Electrodomestico.php");
final class Microondas extends Electrodomestico{
    private $potencia;
    public function getPotencia() : int {
        return $this->potencia;
    }
    // No podemos implementar mostrarResumen()
}
// No podremos heredar de Microondas