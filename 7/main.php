<?php

$name = $_POST['nome'];
$idd = $_POST['idade'];
$sexo = $_POST['sexo'];


if($sexo == "feminino" && $idd < 25) {
    echo $name ."Aceita";
} else {
   echo $name ."Não aceita";
}

?>