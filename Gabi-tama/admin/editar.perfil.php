<?php session_start();

require 'config.php';
require '../functions.php';


$conexion = conexion($bd_config);
if(!$conexion){
	header('Location: ../error.php');
}
comprobarSession();
$id_get = (isset($_GET['id'])) ?$_GET['id'] : "";
#echo $id_get . "<br>";
$id_usuario=$_SESSION['id_usuario'];
 
$tengo = obtenerUsuarioId($conexion,$id_usuario);

$statusadmin = cantidad_por_status($conexion);
$statusadmin = ($statusadmin['1'] < 2) ? 0 : 1;

if($_SERVER['REQUEST_METHOD']=='POST'){
	$id_usuario = $_POST['id_usuario'];
	$usuario = $_POST['usuario'];
	$password = $_POST['password'];
	$password = hash('sha512', $password);
	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$fecha_registro = $_POST['fecha_registro'];
	$status = $_POST['status'];
	$avatar = $_POST['avatar'];

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
	header('Location: perfil.php');
}



require '../views/admin_editar.perfil.view.php';


?>