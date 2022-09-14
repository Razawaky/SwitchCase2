<?php

$num1 = $_POST['st'];
$num2 = $_POST['nd'];
$op = $_POST['op'];

switch($op) {
    case "Somar": 
        $result = $num1 + $num2;
    break;
    case "Subtrair":
        $result = $num1 - $num2;
    break;
    case "Multiplicar":
        $result = $num1 * $num2;
    break;
    case "Dividir":
        $result = $num1 / $num2;
    break;
}

echo $result;

?>