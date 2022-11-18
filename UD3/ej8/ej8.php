<?php
/*setcookie(nombre [, valor [, expira [, ruta [, dominio [, seguro [, httponly ]]]]]]);
setcookie(nombre [, valor = "" [, opciones = [] ]] )*/
?>

<?php
$accesosPagina = 0;
$accesosPagina = $_COOKIE['accesos']; // recuperamos una cookie
if (isset($_COOKIE['accesos'])) { 
    setcookie('accesos', ++$accesosPagina); // le asignamos un valor
}
?>

<?php
//setcookie(nombre, "", 1) // pasado
?>

<?php
//setcookie(nombre, valor, time() + 3600) // Caducan dentro de una hora
?>