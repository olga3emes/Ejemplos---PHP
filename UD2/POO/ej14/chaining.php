<?php
include_once("Libro.php");
$p1 = new Libro();
$p1->setNombre("Harry Potter");
$p1->setAutor("JK Rowling");
echo $p1;
echo "<br>";
// Method chaining
$p2 = new Libro();
$p2->setNombre("La Bestia")->setAutor("Carmen Mola");
echo $p2;

?>



