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
<style>
	body{
		background-image:url(IMG/index.jpg);
		background-size: 100% 100%;
		background-attachment: fixed;
	}
	form
	{
		background-color:white;
	}
</style>
</head>
<body>
	<div class="container">
		<div class="row" style="margin-top:70px;">
			<div class="col-mid-12"  style="margin:auto; width:580px;">
				<div class="card">
					<form  action="ACCIONES/AgregarUser.php" method="post" >
						<tr><th><center><b><h2>REGISTRO</h2></b></center></th></tr>
						<table class="table table-responsive" style="text-align:center;">
							<div class="col-mid-6">
								<tr>
									<th>
										<label>NOMBRE</label>
										<input type="text" style="width:540px;" class="form-control" required name="NOMBRE" value="" placeholder=""></th>
									</tr>
								</div>
								<tr>
									<th><label>EMAIL</label>
										<input type="email" style="width:540px;" class="form-control" required name="EMAIL" value="" placeholder=""></th>
									</tr>
									<tr>
										<th><label>CLAVE</label>
											<input type="password" style="width:540px;" class="form-control" required name="CLAVE" value="" placeholder=""></th>
										</tr>
									</tr>
									<tr>
										<td><center><button type="submit" class="btn btn-primary"><i class="fa fa-user-plus fa-2x"></i></button></center></td>
									</tr>
								</table>
							</form>
						</div>
					</div>
				</div>
			</div>

		</body>
		</html>

