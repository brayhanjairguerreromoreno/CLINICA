<?php 
//  conexion a la base de datos 
include('conexion.php');
$link=$conexion;
// consulta para ver los datos ingresados en la base de datos 
$consulta="SELECT * FROM `usuarios`"; 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="CSS/bootstrap.min.css">
	<link rel="stylesheet" href="font/css/font-awesome.min.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/sweetalert2.js"></script>
</head>
<style >
	body {
		background-image:url(IMG/login.jpg);
		background-size: 100% 100%;
		background-attachment: fixed;

	}
</style>
<body>
	<style>
		body
		{
			background-image:url(IMG/login.jpg);
			background-size: 100% 100%;
			background-attachment: fixed;
		}
	</style>
</head>
<body>
	<div id="formulario">
		<div class="h2"></div>
		<script>
			function usrpass(){

				if (document.formularios.nombre.value=="Brayhan" && document.formularios.apellido.value=="1234"){window.location="index.php"}


					else(alert("error de usuario"))

				}

			document.oncontextmenu=new Function("return false");

		</script>
		<div class="container">
			<div class="row" style="margin-top:70px;">
				<div class="col-mid-12"  style="margin:auto; width:420px; height:700px;">
					<div class="card">
						<form name="formularios">
							<div class="input" style="text-align:center;">
								<label>USUARIO:</label>
								<input type="text" name="nombre"  class="form-control"  autofocus>
								<label>CLAVE:</label>
								<input type="password"  name="apellido" class="form-control" maxlength="40" placeholder="">
								<br>
								<br>
								<center><tr><td><button type="button" class="btn btn-primary" value="" onclick="usrpass()" ><i class="fa fa-user fa-2x"> </i>INICIAR SESION</button><a href="register.php" class="btn btn-primary"><i class="fa fa-user-plus fa-2x"> </i>REGISTRARSE</a></td>
								</tr>
								</center>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
