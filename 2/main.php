<?php

$valor = $_POST['num'];

switch($valor % 2 == 0 && $valor % 5 == 0 && $valor % 10 == 0) {
    
    case 1:
        echo "$valor é divisível por 2, 5 e 10";
    break;

    default:
        echo "$valor não é divisível por 2, 5 e 10";
    break;
        
}