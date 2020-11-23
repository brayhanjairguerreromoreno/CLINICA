<?php 
 $user="root";
 $password="";
 $server="localhost";
 $db="clinica";

$conexion= mysqli_connect($server,$user) or die("conectado");

$db = mysqli_select_db($conexion,$db)or die("no conectado");


 ?>