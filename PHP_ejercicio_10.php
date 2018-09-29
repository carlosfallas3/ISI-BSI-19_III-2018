<?php 
 echo "texto plano = " . htmlspecialchars($_POST["textoPlano"]) . "<br/>";
 echo "text Area = " . htmlspecialchars($_POST["textArea"]);
 echo "Campo Seleccion = " .  htmlspecialchars($_POST["select"]). "<br/>";
 echo "Campo checkbox = " . htmlspecialchars($_POST["chekbox"]). "<br/>";
 echo "Radio group = " . htmlspecialchars($_POST["grupo"]). "<br/>";
 echo "Rango = " . htmlspecialchars($_POST["rango"]). "<br/>";
?>