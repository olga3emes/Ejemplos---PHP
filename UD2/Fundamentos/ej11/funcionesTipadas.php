<?php
declare(strict_types=1);

function olga(int $a, int $b) : int {
    return $a + $b;
}

$num = 33;
/*echo suma(10, 30); //40
echo suma(10, $num);//43
echo suma("10", 30); // error por tipificación estricta, sino daría 40
?>
