<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
</head>

<body>
    <form action="formulario.php" method="GET">
        <p><label for="nombre">Nombre del alumno:</label>
            <input type="text" name="nombre" id="nombre" value="" />
        </p>
        <p><input type="checkbox" name="modulos[]" id="modulosDWES" value="DWES" />
            <label for="modulosDWES">Desarrollo web en entorno servidor</label>
        </p>
        <p><input type="checkbox" name="modulos[]" id="modulosDWEC" value="DWEC" />
            <label for="modulosDWEC">Desarrollo web en entorno cliente</label>
        </p>
        <input type="submit" value="Enviar" name="enviar" />
    </form>
</body>

</html>