<?php

$valor = $_POST['num'];

if ($valor % 2 == 0 && $n % 5 == 0 && $n % 10 == 0) {
    echo $valor . " é divisível por 2, 5 e 10";
}
elseif ($n % 10 == 0) {
    echo $valor . " é divisível por 10";
}
elseif ($valor % 2 == 0) {
    echo $valor . " é divisível por 2";
}
elseif ($valor % 5 == 0) {
    echo $valor . " é divisível por 5";
}
else {
    echo $valor . " não é divisivel";
}
?>