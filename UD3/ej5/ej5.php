<?php
if (!empty($_POST['modulos']) && !empty($_POST['nombre'])) {
    // Aquí se incluye el código a ejecutar cuando los datos son correctos 
    echo "Todo correcto";
} else {
    // Generamos el formulario
    $nombre = $_POST['nombre'] ?? "";
    $modulos = $_POST['modulos'] ?? [];
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <p><label for="nombre">Nombre del alumno:</label>
        <input type="text" name="nombre" id="nombre" value="<?= $nombre ?>" ></p>
    
        <p><input type="checkbox" name="modulos[]" id="modulosDWES" value="DWES" 
    <?php if (in_array("DWES", $modulos)) echo 'checked="checked"'; ?> />
        <label for="modulosDWES">Desarrollo web en entorno servidor</label>
    </p>

    <p><input type="checkbox" name="modulos[]" id="modulosDWEC" value="DWEC" 
    <?php if (in_array("DWEC", $modulos)) echo'checked="checked"'; ?> />
        <label for="modulosDWEC">Desarrollo web en entorno cliente</label>
    </p>
    <input type="submit" value="Enviar" name="enviar" />
</form>
<?php } ?>