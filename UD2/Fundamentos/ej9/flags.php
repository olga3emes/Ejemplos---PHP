<?php
$salir = false;
for ($i = 1; $i <= 10 && !$salir; $i++) {
    if ($i === 5) {
        echo "Salgo cuando i=5";
        $salir = true;
    }
}
?>