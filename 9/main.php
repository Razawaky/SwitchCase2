<?php

$name = $_POST['nome'];
$id = $_POST['idd'];

if($id == null || $id >160) {
    echo "Idade inválida";
}
if($id >= 0 && $id <= 10) {
    echo $name ." Valor do plano..R$ 30,00";
}
if($id > 10 && $id <= 29 ) {
    echo $name ." Valor do plano..R$ 60,00";
}
if($id > 29 && $id <= 45) {
    echo $name ." Valor do plano..R$ 120,00";
}
if($id > 45 && $id <= 59) {
    echo $name ." Valor do plano..R$ 150,00";
}
if($id > 59 && $id <= 65) {
    echo $name ." Valor do plano..R$ 250,00";
}
if($id > 65 && $id < 160) {
    echo $name ." Valor do plano..R$ 400,00";
}
?>