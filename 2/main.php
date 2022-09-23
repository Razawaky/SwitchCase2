<?php

$valor = $_POST['num'];

if($valor % 2 == 0 ) {
    echo $valor ." É divisivel por 2 ";
}
if($valor % 5 == 0) {
    echo $valor ." É divisivel por 5 ";
}
if($valor % 10 == 0) {
    echo $valor ." É divisivel por 10 ";
}

else{
   echo "Não é divisvel";
}

?>