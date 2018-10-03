<?php 
 //AUTOR: CARLOS FALLAS GODINEZ
 $accion = $_POST["opera"];
 $val1 = $_POST["val1"];
 $val2 = $_POST["val2"];
 $resultado=0;
 if($accion === "sum"){
	$resultado = $val1+$val2;
 }else if($accion === "res"){
 	$resultado = $val1-$val2;
 }else if($accion === "mul"){
 	$resultado = $val1*$val2;
 }else if($accion === "div"){
 	$resultado = $val1/$val2;
 }

 echo $resultado;

 

?>