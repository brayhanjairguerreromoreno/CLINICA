<?php
//  conexion a la base de datos 
include('../conexion.php');
$link=$conexion; 
//variables en las cuales  resivimos los datos enviados desde el formulario
 $NOMBRE=$_POST['NOMBRE']; 
 $DOCUMENTO=$_POST['DOCUMENTO']; 
 $TELEFONO=$_POST['TELEFONO']; 
 $DIRECCION=$_POST['DIRECCION']; 
 $SERVICIO=$_POST['SERVICIO'];
 if (isset($_POST['VISITA'])) {
 $VISITA=1;
 }else{
 	$VISITA=0;
 }


$NAFAMILIAR=$_POST['NAFAMILIAR'];
$NOMFAMILIAR=$_POST['NOMFAMILIAR'];
$DOCFAMILIAR=$_POST['DOCFAMILIAR'];

//consulta para ver los datos ingresados en la base de datos 
  $SQL="UPDATE `usuarios` SET `NOMBRE`='".$NOMBRE."',`DOCUMENTO`='".$DOCUMENTO."',`TELEFONO`='".$TELEFONO."',`DIRECCION`='".$DIRECCION."',`SERVICIO`='".$SERVICIO."',`VISITA`='".$VISITA."',`NOADFAMILIAR`='".$NAFAMILIAR."',`NOMBREFAMILIAR`='".$NOMFAMILIAR."',`DOCUMENTOFAMILIAR`='".$DOCFAMILIAR."' WHERE `DOCUMENTO`='".$DOCUMENTO."'"; 
  $resultado = mysqli_query( $link,$SQL) or die('ERROR AL ACTUALIZAR');
?>
<script>
	location.href="../index.php";
</script>