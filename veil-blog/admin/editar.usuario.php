<?php session_start();

require 'config.php';
require '../functions.php';


$conexion = conexion($bd_config);
if(!$conexion){
	header('Location: ../error.php');
}
comprobarSession();
comprobarStatus();
$id_get = (isset($_GET['id'])) ?$_GET['id'] : "";
 
$tengo = obtenerUsuarioId($conexion,$id_get);

#$statusadmin = cantidad_por_status($conexion);
#$statusadmin = ($statusadmin['1'] < 2) ? 0 : 1;

if($_SERVER['REQUEST_METHOD']=='POST'){
	$id_usuario = $_POST['id_usuario'];
	$usuario = $_POST['usuario'];
	$password = $_POST['password'];
	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$fecha_registro = $_POST['fecha_registro'];
	$status = $_POST['status'];
	$avatar = $_POST['avatar'];

	/*echo $usuario ."<br>";
	echo $nombre ."<br>";
	echo $email ."<br>";
	echo $status ."<br>";
	echo $avatar ."<br>";
*/
	$tengo = obtenerUsuarioId($conexion,$id_usuario);
	#echo "<br><h1>".$tengo['status']."</h1><br>";

	$statusadmin = cantidad_por_status($conexion);
	#print_r($statusadmin);

	if ($tengo['status'] == 1) {
		$statement = $conexion -> prepare('UPDATE usuarios SET id_usuario=:id_usuario,usuario=:usuario,password=:password,nombre=:nombre,email=:nombre,email=:email,fecha_registro=:fecha_registro,status=:status,avatar=:avatar WHERE id_usuario=:id_usuario');
		$statement -> execute(array(
			'id_usuario' => $id_usuario,
			'usuario' => $usuario,
			'password' => $password,
			'nombre' => $nombre,
			'email' => $email,
			'fecha_registro' => $fecha_registro,
			'status' => $status,
			'avatar' => $avatar
		));
		header('Location: usuarios.php');
		#echo "Era suscriptor por tanto puede cambiar y se cambio a Administrador";
	}
	$error="";
	if($tengo['status'] == 0){
		if ($statusadmin['1']<2) {
			$status = $tengo['status'];
			echo "Estatus ahora hoy: ". $status . " sin fronteras<br>";
			$error="error";
		}else{
			$status = 1;
		}
		$statement = $conexion -> prepare('UPDATE usuarios SET id_usuario=:id_usuario,usuario=:usuario,password=:password,nombre=:nombre,email=:nombre,email=:email,fecha_registro=:fecha_registro,status=:status,avatar=:avatar WHERE id_usuario=:id_usuario');
		$statement -> execute(array(
			'id_usuario' => $id_usuario,
			'usuario' => $usuario,
			'password' => $password,
			'nombre' => $nombre,
			'email' => $email,
			'fecha_registro' => $fecha_registro,
			'status' => $status,
			'avatar' => $avatar
		));
		header('Location: usuarios.php?result='.$error);
	}
	
	#header('Location: usuarios.php');
}



require '../views/admin_editar.usuario.php';


?>