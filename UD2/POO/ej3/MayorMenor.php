<?php
class MayorMenor{
    private int $mayor;
    private int $menor;
    public function getMayor(){
        return $this->mayor;
    }
    public function setMayor($mayor){
        $this->mayor = $mayor;
        return $this;
    }
    public function getMenor(){
        return $this->menor;
    }
    public function setMenor($menor){
        $this->menor = $menor;
        return $this;
    }
}