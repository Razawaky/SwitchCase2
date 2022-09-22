<?php

//Um comerciante comprou um produto e quer vendê-lo com um lucro de 45% 
//se  o  valor  da  compra  for  menor  que  R$  20,00  caso  contrário,  
//o  lucro  será  de 30%. Entrar com o valor do produto e mostreo valor da 
//venda.

$pc = $_POST['preço'];

if($pc < 20) { //45% de lucro
    echo ($pc * 45) / 100; 
}
else { // 30% de lucro
    echo ($pc * 30) / 100;
}

?>