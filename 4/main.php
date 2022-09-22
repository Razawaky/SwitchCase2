<?php
//não eleitor (abaixo de 16 anos)eleitor obrigatório ( entre 18 e 65 anos)eleitor facultativo ( entre 16 e 18 anos e maior de 65 anos)

$idade = $_POST['idd'];


if($idade < 16) {
    echo "Não eleitor";
}
if($idade >= 18 && $idade <= 65) {
   echo "eleitor obrigatório";
}
if($idade >= 16 && $idade < 18 || $idade > 65 ) {
    echo "eleitor facultativo";
}
?>