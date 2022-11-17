<?php header("Content-Type: text/plain"); ?>
<?php header("Location: http://www.ejemplo.com/inicio.html");
exit();
?> 
<?php
//TODO: gmdate sustituye en uso a gmstrftime deprecated v8.1. 
// tres horas
$now = time();
echo date("d m Y H:i:s", $now) . "\n";
$horas3 = date("d m Y H:i:s", $now + 60 * 60 * 3);
echo $horas3 . "\n";
header("Expires: {$horas3}");
// un año
$now = time();
$anyo1 = date("d m Y H:i:s", $now + 365 * 86440);
echo $anyo1 . "\n";
header("Expires: {$anyo1}");
// se marca como expirado (fecha en el pasado)
$pasado = date("d m Y H:i:s");
echo $pasado;
header("Expires: {$pasado}");
// evitamos cache de navegador y/o proxy
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");