<?php
class Libro {
    private $nombre;
    private $autor;
    public function getNombre() : string{
        return $this->nombre;
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
        return $this;
    }
    public function getAutor() : string{
        return $this->autor;
    }
    public function setAutor($autor){
        $this->autor = $autor;
        return $this;
    }
    public function __toString(): string{
         return $this->nombre." de ".$this->autor;
    }
}