<?php
/*session_start(); // carga la sesión
session_id(); // devuelve el id
$_SESSION[clave] = valor; // inserción
session_destroy(); //  destruye la sesión
unset($_SESSION[clave]); */ // borrado
?>

<?php
session_start(); // inicializamos
$_SESSION["daw"] = "Ilerna"; // asignación
$daw = $_SESSION["daw"]; // recuperación
echo "Estamos en $daw ";
?>
<br />
<a href="session.php">Y luego</a>