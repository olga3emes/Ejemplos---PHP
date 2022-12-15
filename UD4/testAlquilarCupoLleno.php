<?php
function testAlquilarCupoLleno()
{
    $soporte1 = new CintaVideo("Los cazafantasmas", 23, 3.5, 107);
    $soporte2 = new Juego("The Last of Us Part II", 26, 49.99, "PS4", 1, 1);
    $soporte3 = new Dvd("Origen", 24, 15, "es,en,fr", "16:9");
    $soporte4 = new Dvd("El Imperio Contraataca", 4, 3, "es,en", "16:9");

    $cliente1 = new Cliente("Bruce Wayne", 23);
    $cliente1->alquilar($soporte1);
    $cliente1->alquilar($soporte2);
    $cliente1->alquilar($soporte3);

    $this->expectException(CupoSuperadoException::class);
    $cliente1->alquilar($soporte4);
}