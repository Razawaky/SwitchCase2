<?php 

$vl1 = $_POST['vl1'];
$vl2 = $_POST['vl2'];
$vl3 = $_POST['vl3'];
$vl4 = $_POST['vl4'];
$vl5 = $_POST['vl5'];

if($vl1 > $vl2 && $vl1 > $vl3 && $vl1 > $vl4 && $vl1 > $vl5){
   echo $vl1 . " É o maior valor entre os demais "; 
}
if($vl2 > $vl1 && $vl2 > $vl3 && $vl2 > $vl4 && $vl2 > $vl5){
    echo $vl2 . " É o maior valor entre os demais "; 
 }
 if($vl3 > $vl1 && $vl3 > $vl2 && $vl3 > $vl4 && $vl3 > $vl5){
    echo $vl3 . " É o maior valor entre os demais "; 
 }
 if($vl4 > $vl1 && $vl4 > $vl2 && $vl4 > $vl3 && $vl4 > $vl5){
    echo $vl4 . " É o maior valor entre os demais "; 
 }
 if($vl5 > $vl1 && $vl5 > $vl2 && $vl5 > $vl3 && $vl5 > $vl4){
    echo $vl5 . " É o maior valor entre os demais " ; 
 }

 if($vl1 < $vl2 && $vl1 < $vl3 && $vl1 < $vl4 && $vl1 < $vl5){
    echo "<br>" .$vl1 . " É o menor número "; 
 }
 
 if($vl2 < $vl1 && $vl2 < $vl3 && $vl2 < $vl4 && $vl2 < $vl5){
     echo $vl2 . " É o menor número "; 
  }
 
  if($vl3 < $vl1 && $vl3 < $vl2 && $vl3 < $vl4 && $vl3 < $vl5){
     echo $vl3 . " É o menor número "; 
  }
 
  if($vl4 < $vl1 && $vl4 < $vl2 && $vl4 < $vl3 && $vl4 < $vl5){
     echo $vl4 . " É o menor número "; 
  }
 
  if($vl5 < $vl1 && $vl5 < $vl2 && $vl5 < $vl3 && $vl5 < $vl4){
     echo $vl5 . " É o menor número "; 
  }

  ?>