<?php
$vl = $_POST['valor'];
$cd = $_POST['codigo'];


switch($cd) {
    case 1:
        echo "R$ " .$vl + (($vl * 15) /100) ;
    break;
    case 3:
        echo "R$ " .$vl + (($vl * 20) /100);
    break;
    case 4: 
        echo "R$ " .$vl + (($vl * 35) /100);
    break;
    case 8: 
        echo "R$ " .$vl + (($vl * 40) /100);
    break;
    default:
        echo "sem taxa..";
    break;
}

?>