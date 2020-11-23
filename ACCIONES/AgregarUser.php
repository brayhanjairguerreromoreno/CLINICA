<?php 
//  conexion a la base de datos 
include('../conexion.php');
$link=$conexion; 
//variables en las cuales  resivimos los datos enviados desde el formulario
 $NOMBRE=$_POST['NOMBRE']; 
 $EMAIL=$_POST['EMAIL']; 
 $ROL=2;
 $CLAVE=$_POST['CLAVE'];

 // var_dump($NOMBRE,$EMAIL,$ROL,$CLAVE); 
 $SQL="INSERT INTO `user`(`ID`, `NOMBRE`, `EMAIL`, `ROL`, `CLAVE`) VALUES (NULL,'$NOMBRE','$EMAIL','$ROL','$CLAVE')";
 $resultado = mysqli_query( $link,$SQL) or die('ERROR AL REGISTRARSE');
 ?>
 <script>
	location.href="../index.php";
</script>