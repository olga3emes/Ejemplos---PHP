<?php
/*function sumaParametrosMejor(...$numeros) {
    if (count($numeros) == 0) {
        return false;
    } else {
        $suma = 0;

        foreach ($numeros as $num) {
            $suma += $num;
        }

        return $suma;
    }
}

echo sumaParametrosMejor(1, 5, 9); // 15
*/
?>


<?php
function suma($a, $b) {
    return $a + $b;
}

echo suma(...[1, 5])."<br />";

$a = [1, 5];
echo suma(...$a);
?>
