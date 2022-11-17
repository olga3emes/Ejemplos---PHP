<?php
function funcionArgumentosNombre($a, $b = 2, $c = 4) {
    echo "$a $b $c";
}
funcionArgumentosNombre(c: 3, a: 1); // "1 2 3"

funcionArgumentosNombre(1, 3); //1 3 4