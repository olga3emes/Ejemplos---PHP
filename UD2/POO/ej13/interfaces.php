<?php
interface Mostrable{
    public function mostrarResumen(): string;
}
interface MostrableTodo extends Mostrable{
    public function mostrarTodo(): string;
}
interface Facturable{
    public function generarFactura(): string;
}

class Producto3 implements MostrableTodo, Facturable{
    // Implementaciones de los métodos
    // Obligatoriamente deberá implementar public function mostrarResumen, mostrarTodo y generarFactura
    public function mostrarResumen(): string{
        return "resumen";
    }
    public function mostrarTodo(): string{
        return "mostrar";
    }
    public function generarFactura(): string{
        return "factura";
    }
}