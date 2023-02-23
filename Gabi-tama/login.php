<?php session_start();
require 'admin/config.php';
require 'functions.php';

$conexion = conexion($bd_config);
if(!$conexion){
	header('Location: error.php');
}

if(isset($_SESSION['usuario'])){
	#echo "hay una sesion Abierta";
	header('Location:'.RUTA .'admin/');
}
$errores = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$usuario = limpiarDatos($_POST['usuario']);
	$password = limpiarDatos($_POST['password']);
	$password = hash('sha512', $password);
	#echo " ".$usuario." " .$password;
	$statement = $conexion -> prepare('SELECT * FROM usuarios WHERE  email = :email AND password = :password OR usuario = :usuario AND password = :password');
	$statement -> execute(array(
		':email' => $usuario,
		':usuario' => $usuario,
		':password' => $password
	));
	$resultado = $statement -> fetch();
	if($resultado !== false){
		$datos = obtenerUsuario($conexion, $usuario);

		$_SESSION['id_usuario'] =  $datos['id_usuario'];
		$_SESSION['usuario'] =  $datos['usuario']; 
		$_SESSION['password'] =  $datos['password'];
		$_SESSION['nombre'] =  $datos['nombre'];
		$_SESSION['email'] =  $datos['email'];
		$_SESSION['fecha_registro'] =  $datos['fecha_registro'];
		$_SESSION['status'] =  $datos['status'];
		$_SESSION['avatar'] =  $datos['avatar'];
		header('Location:'.RUTA .'admin/perfil.php');
	}else{
		$errores .= '<li>Datos Incorrectos</li>';
	}


}

require 'views/login.view.php';

?>