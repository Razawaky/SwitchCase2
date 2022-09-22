<?php

$vl = $_POST['valor'];

if($vl == null) {
    echo "Inválido";
}
if($vl <= 10 ) { //Lucro de 70%
    echo "R$ " .($vl * 70) / 100;
}
if($vl >= 10.01 && $vl <= 30) { //Lucro de 50%
    echo "R$ " .($vl * 50) / 100;
}
if($vl > 30 && $vl <= 50) { //Lucro de 40%
    echo "R$ " .($vl * 40) / 100;
}
if($vl > 50) { //Lucro de 30%
    echo "R$ " .($vl * 30) / 100;
}

?>