<?php
echo "El formulario se ha enviado.";

if (isset($_GET["modulos"])) {
    $par = $_GET["modulos"];
    // comprobar si $par tiene el formato adecuado, su valor, etc... 
    echo " Se han recibido módulos";
} else {
    echo " Ningún módulo recibido";
}