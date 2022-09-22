<?php

$A = $_POST['var1'];
$B = $_POST['var2'];

if($A == $B || $A > $B || $A < $B || $B > $A || $B < $A) {
    echo $B ."<br>" .$A;
}
?>