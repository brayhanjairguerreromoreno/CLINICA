<?php
//  conexion a la base de datos 
include('../conexion.php');
$link=$conexion;
$NOMBRES=$_POST['NOMBRES']; 
$DOCUMENTO=$_POST['DOCUMENTO']; 
$TELEFONO=$_POST['TELEFONO']; 
$DIRECCION=$_POST['DIRECCION']; 
$SERVICIO=$_POST['SERVICIO'];
if (isset($_POST['VISITA'])) {
	$VISITA=$_POST['VISITA'];
}else{
	$VISITA=0;
}
$NAFAMILIAR=$_POST['NAFAMILIAR'];
$NOMFAMILIAR=$_POST['NOMFAMILIAR'];
$DOCFAMILIAR=$_POST['DOCFAMILIAR'];

$SQL="INSERT INTO usuarios (`ID`, `NOMBRE`, `DOCUMENTO`, `TELEFONO`, `DIRECCION`, `SERVICIO`, `VISITA`, `NOADFAMILIAR`, `NOMBREFAMILIAR`, `DOCUMENTOFAMILIAR`) VALUES (NULL, '$NOMBRES', '$DOCUMENTO', '$TELEFONO', '$DIRECCION', '$SERVICIO', '$VISITA','$NAFAMILIAR','$NOMFAMILIAR', '$DOCFAMILIAR');";
$resultado = mysqli_query( $link,$SQL);

?>
<script>
	 location.href ="../index.php";
</script>
