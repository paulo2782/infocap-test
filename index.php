<?php
function a($x, $y){
    $resultado = 0;

    $i = 0;

    while ($i < $y) {
        $resultado = $resultado + $x;
        $i = $i + 1;
    }

    echo $resultado;
}

a(9,3);
?>
