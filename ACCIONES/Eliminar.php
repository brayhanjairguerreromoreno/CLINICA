<?php 
include('../conexion.php');
$link=$conexion;

$ID=$_GET['ID'];

$SQL="DELETE FROM `usuarios` WHERE  `ID`='".$ID."'";
$resultado = mysqli_query( $link,$SQL) or die('ERROR AL ELIMINAR');

?>
<script>
	location.href ="../index.php";
</script>