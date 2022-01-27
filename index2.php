<?php
$s[0] = 'J';
$s[1] = 'U';
$s[2] = 'L';
$s[3] = 'H';
$s[4] = 'O';


// PRIMEIRO CONTADOR
$aux = 0;
for($i = 0 ; $i <= 29 ; $i++){
    if($aux == 5){
        $aux = 0;
    }
    if($i == 29){
        echo $s[$aux];
    }
    $aux++;
}
// SEGUNDO CONTADOR
$aux = 0;
for($i = 0 ; $i <= 370 ; $i++){
    if($aux == 5){
        $aux = 0;
    }
    if($i == 370){
        echo $s[$aux];
    }
    $aux++;
}
// TERCEIRO CONTADOR
$aux = 0;
for($i = 0 ; $i <= 3198 ; $i++){
    if($aux == 5){
        $aux = 0;
    }
    if($i == 3198){
        echo $s[$aux];
    }
    $aux++;
}
?>
