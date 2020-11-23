 <?php 
 include('conexion.php');
 $link=$conexion;
//if (isset($_POST['usuario']) && isset($_POST['password'])) {
	//include('conexion.php');
	//$usuario =$_POST['usuario'];
	//$password =$_POST['password'];
//}
 $consulta="SELECT * FROM usuarios";
 $resultado = mysqli_query( $link, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");

 // if($resultado==)
 $servicio ="SELECT * FROM servicios";
 $rservicio=mysqli_query($link, $servicio) or die ( "Algo ha ido mal en la consulta a la base de datos 1");

 ?> 
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title></title>
 	<link rel="stylesheet" href="CSS/bootstrap.min.css">
 	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
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
	table
	{
		background-color:white;
	}
 </style>
 <body>
 	<div class="container">
 		<div style="margin-top:100px;">
 			
 			<tr><th><center><b><h2>USUARIOS</h2></b></center></th></tr>
 			<table class="table table-striped table-responsive">
 				<thead>
 					<tr align="center">
 						<th></th>
 						<th>NOMBRES</th>
 						<th>DOCUMENTO</th>
 						<th>TELEFONO</th>
 						<th>DIRECCION</th>
 						<th>SERVICIO</th>
 						<th>VISITA</th>
 						<th>NOADFAMI</th>
 						<th>NOMFAMI</th>
 						<th>DOCFAMI</th>
 					</tr>
 				</thead>
 				<tbody>
 					<form action="ACCIONES/Agregar.php" method="post" accept-charset="utf-8">

 						<tr>
 							<td style="padding-top:0"></td>
 							<td style="padding-top:0"><input  required name="NOMBRES" class="form-control" type="text"></td>
 							<td style="padding-top:0"><input  required name="DOCUMENTO" class="form-control" type="text"></td>
 							<td style="padding-top:0"><input required name="TELEFONO" class="form-control" type="text"></td>
 							<td style="padding-top:0"><input required name="DIRECCION" class="form-control" type="text"></td>
 							<td style="padding-top:0"><select name="SERVICIO" required class="form-control">
 								<option value="1">URGENCIAS</option>
 								<option value="2">PEDIATRIA</option>
 								<option value="3">UCI</option>
 								<option value="4">CONSULTA EXTERNA</option>
 							</select></td>
 							<td style="padding-top:0"><input type="checkbox" name="VISITA" class="form-control" value="1"></td>
 							<td style="padding-top:0"><input name="NAFAMILIAR" class="form-control" type="text"></td>
 							<td style="padding-top:0"><input  name="NOMFAMILIAR" class="form-control" type="text"></td>
 							<td style="padding-top:0"><input  name="DOCFAMILIAR" class="form-control" type="text"></td>
 							<td style="padding-top:0"><button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i></button></td></tr>
 						</form>
 						<?php if (isset($resultado)) { ?>
 							<?php while ($key = mysqli_fetch_array( $resultado )){ ?>
 								<form action="ACCIONES/Editar.php"  method="POST" accept-charset="utf-8">
 									<tr>
 										<td style="padding-top:0"><input type="text"  name="ID" style="width:30px" disabled  value="<?php echo $key["ID"]?>" placeholder=""></td>
 										<td style="padding-top:0; "><input style="width:100%; width-max:100%" type="text"  class="form-control" name="NOMBRE" value="<?php echo $key["NOMBRE"]?>" placeholder=""></td>
 										<td style="padding-top:0"><input type="text" class="form-control" name="DOCUMENTO" value="<?php echo $key["DOCUMENTO"]?>" placeholder=""></td>
 										<td style="padding-top:0"><input type="text" class="form-control" name="TELEFONO" value="<?php echo $key["TELEFONO"]?>" placeholder=""></td>
 										<td style="padding-top:0"><input type="text" style="width:160px" class="form-control" name="DIRECCION" value="<?php echo $key["DIRECCION"]?>" placeholder=""></td>
 										<td style="padding-top:0"><select name="SERVICIO"  style="width:160px" class="form-control">
 											<?php foreach ($rservicio as $key2 ) {?>
 												<?php if ($key2['ID']==$key['SERVICIO']) { ?>
 													<option selected value="<?php echo $key2['ID'] ?>"><?php echo $key2['NOMBRE'] ?></option>
 												<?php }else{ ?>
 													<option  value="<?= $key2['ID'] ?>"><?php echo $key2['NOMBRE'] ?></option>
 												<?php } ?>
 											<?php } ?>
 										</select></td>
 										<td style="padding-top:0"><input  type="checkbox" class="form-control" <?php if ($key["VISITA"]==1) {echo "checked";} ?> value="1"></td>
 										<td style="padding-top:0"><input type="text" class="form-control"  name="NAFAMILIAR" value="<?php if($key["NOADFAMILIAR"]==0){echo "";}else{ echo $key["NOADFAMILIAR"];} ?>" placeholder=""></td>
 										<td style="padding-top:0"><input type="text" class="form-control"  name="NOMFAMILIAR" value="<?php echo $key["NOMBREFAMILIAR"]?>" placeholder=""></td>
 										<td style="padding-top:0"><input type="text" class="form-control"  name="DOCFAMILIAR" value="<?php echo $key["DOCUMENTOFAMILIAR"]?>" placeholder=""></td>
 										<td style="padding-top:0"><button  type="submit" class="btn btn-warning"><i class="fa fa-edit"></i></button></td>
 										<td style="padding-top:0"><a href="ACCIONES/Eliminar.php?ID=<?= $key["ID"]?>"  class="btn btn-danger"><i class="fa fa-minus-circle"></i></a></td>
 									</tr>
 								</form>
 							<?php } ?>
 						<?php } ?>
 					</tbody>
 				</table>

 			</div>
 		</div>
 	</body>
 	</html>