<?php
// Recuperamos la información de la sesión
session_start();
// Y la destruimos
session_destroy();
header("Location: index.php");
?>