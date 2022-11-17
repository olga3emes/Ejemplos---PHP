<?php
// Recuperamos la información de la sesión
if (!isset($_SESSION)) {
    session_start();
}
// Y comprobamos que el usuario se haya autentificado
if (!isset($_SESSION['usuario'])) {
    die("Error - debe <a href='index.php'>identificarse</a>.<br />");
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de productos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <h1>Bienvenido <?= $_SESSION['usuario'] ?>
            </h1>
            <p class="ml-5">Pulse <a href="logout.php">aquí para salir </a> </p>
            <p class="ml-5"> Volver
                    al <a href="main.php">Inicio <i class="bi bi-house"></i></a></p>
            <h2>Listado de productos<i class="bi bi-cart2"></i></h2>
            <ul class="m-4">
                <li>Producto 1</li>
                <li>Producto 2</li>
                <li>Producto 3</li>
            </ul>
        </div>
    </div>
</body>

</html>