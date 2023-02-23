<?php
  // Esto es para conectarse a la Base de Datos

// Esto es para conectarse a la Base de Datos

$servername = "localhost";
$username = "esperanza_sa";
$password = "laputajoshua";
$db="esperanza_principal";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);
mysqli_query("SET NAMES 'utf8'");

// Esto es lo que te permite guardar en la Base de Datos

if(isset($_POST['enviar']))
  {
    
    $Res = mysqli_query($conn, $Sql);
    $Col = mysqli_fetch_assoc($Res);
   
    if (mysqli_num_rows($Res) < 1)
    {
     
      $Sql = "INSERT INTO t_cliente (ID, Nombre, Apellido, Edad, Cedula, Modpago, Refmovil, Direccion, Telefono,Fechain,Asunto) VALUES ('0', '".$_POST['Nombre']."', '".$_POST['Apellido']."', '".$_POST['Edad']."', '".$_POST['Cedula']."', '".$_POST['Modpago']."', '".$_POST['Refmovil']."', '".$_POST['Direccion']."', '".$_POST['Telefono']."', '".$_POST['Fechain']."','".$_POST['Asunto']."')";

      if(mysqli_query($conn, $Sql))
      {
        $response = "Succes";
      }
      else
      {
        $response = "No Succes";
      }
    }
      else
      {
        $response = "No Succes";
      }

}
?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->



<style type="text/css" media="screen">
.main{
 	padding: 40px 0;
}
.main input,
.main input::-webkit-input-placeholder {
    font-size: 11px;
    padding-top: 3px;
}
.main-center{
 	margin-top: 30px;
 	margin: 0 auto;
 	max-width: 400px;
    padding: 10px 40px;
	background:#009edf;
	    color: #FFF;
    text-shadow: none;
	-webkit-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);
-moz-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);
box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);

}
span.input-group-addon i {
    color: #009edf;
    font-size: 17px;
}
	
</style>
</head>

<body>
	<div class="container">
			<div class="main">
				<div class="main-center" style="text-align: center;">
				


				<h5 style="
  font-size: 200%;
  font-weight: bold;
  letter-spacing: 10px;
  text-align: center;
  text-shadow: gray 6px 0;
  text-transform: uppercase;">Ingrese los datos del cliente</h5>
					<form class="" method="post" action="#">
						
						<div class="form-group">
							<label for="Nombre">Nombre</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
				<input type="text" class="form-control" name="Nombre" id="Nombre"  placeholder="Ingrese nombre"/>
							</div>
						</div>

						<div class="form-group">
							<label for="Apellido">Apellido</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="Apellido" id="Apellido" placeholder="Ingrese apellido"/>
							</div>
						</div>

						<div class="form-group">
							<label for="Edad">Edad</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="number" class="form-control" name="Edad" id="Edad" placeholder="Ingrese la edad"/>
								</div> 
						</div>

						<div class="form-group">
							<label for="Cedula">Cedula</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="number" class="form-control" name="Cedula" id="Cedula" placeholder="Ingrese Cedula"/>
							</div>
						</div>


						<div class="form-group">
							<label for="Modpago">Modo de pago</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="Modpago" id="Modpago" placeholder="Ingrese modo de pago"/>
								</div>
						</div>


						<div class="form-group">
							<label for="Refmovil">Referencia de pago movil</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="Refmovil" id="Refmovil" placeholder="Ingrese modo de pago"/>
								</div>
						</div>


						<div class="form-group">
							<label for="Direccion">Direccion</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="Direccion" id="direccion" placeholder="Ingrese direccion"/>
								</div>
						</div>


						<div class="form-group">
							<label for="Telefono">Telefono</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="Telefono" id="Telefono" placeholder="Ingrese telefeno"/>
								</div>
						</div>

						<div class="form-group">
							<label for="Fechain">Fecha de ingreso</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="Fechain" id="Fechain" placeholder="Ingrese Fecha"/>
								</div>
						</div>


						<div class="form-group">
							<label for="Asunto">Asunto de la visita</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="Asunto" id="Asunto" placeholder="Ingrese Asunto de la visita"/>
								</div>
						</div>

				<button href="" type="submit" style="background-color:black " name="enviar" id="enviar" >Enviar</button>
						
					</form>
				</div><!--main-center"-->
			</div><!--main-->
		</div><!--container-->

	</body>

	</html>