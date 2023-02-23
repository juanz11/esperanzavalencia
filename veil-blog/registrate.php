<?php session_start();
require 'admin/config.php';
require 'functions.php';


if (isset($_SESSION['usuario'])) {
	#echo("<script>alert('Hay una secion inicializada');</script>");
}else{}

$conexion = conexion($bd_config);
if(!$conexion){
	header('Location: error.php');
}


$errores = '';
$status = '1';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$email = $_POST['email'];
	$usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
	$password = $_POST['password'];
	$password2 = $_POST['password2'];
	$avatar = $_POST['avatar'];
	
	if(!empty($nombre)){
		$nombre = trim($nombre);
		$nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
	}else{
		$errores .= 'Por favor ingresa un nombre <br>';
	}
	if(!empty($nombre)){
		$apellido = trim($apellido);
		$apellido = filter_var($apellido, FILTER_SANITIZE_STRING);
	}else{
		$errores .= 'Por favor ingresa un apellido <br>';
	}
	$nombre = $nombre . " " . $apellido;
	if(!empty($email)){
		$email = filter_var($email, FILTER_SANITIZE_EMAIL);

		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$errores .= 'Porfavor ingresa un correo valido <br>';
		}
	} else {
		$errores .= 'Por favor ingresa un correo <br>';
	}

	if(empty($usuario) or empty($password) or empty($password2) or empty($nombre) or empty($email)){
		$errores .= '<li>Por favor rellena todos los datos correctamente</li>';
	}else{
		$statement = $conexion -> prepare('SELECT * FROM usuarios WHERE usuario = :usuario or email = :email LIMIT 1');
		$statement -> execute(array(':usuario' => $usuario, ':email' => $email));
		$resultado = $statement -> fetch();

		if($resultado != false){
			$errores .= '<li>El nombre de Usuario o correo ya existe</li>';
		}

		$password = hash('sha512', $password);
		$password2 = hash('sha512', $password2);

		if($password != $password2){
			$errores .= '<li>Las contraseñas no son iguales</li>';
		}
	}
	if ($errores == '') {
		$statement = $conexion -> prepare('INSERT INTO usuarios (id_usuario, usuario, password, nombre, email, status,avatar) VALUES (null, :usuario, :password, :nombre, :email, :status, :avatar)');
		$statement -> execute(array(
			':usuario' => $usuario,
			':password' => $password,
			':nombre' => $nombre,
			':email' => $email,
			':status' => $status,
			':avatar' => $avatar
		));
		$datos = obtenerUsuario($conexion, $usuario);

		$_SESSION['id_usuario'] =  $datos['id_usuario'];
		$_SESSION['usuario'] =  $datos['usuario']; 
		$_SESSION['password'] =  $datos['password'];
		$_SESSION['nombre'] =  $datos['nombre'];
		$_SESSION['email'] =  $datos['email'];
		$_SESSION['fecha_registro'] =  $datos['fecha_registro'];
		$_SESSION['status'] =  $datos['status'];
		$_SESSION['avatar'] =  $datos['avatar'];
		header('Location:'.RUTA .'admin/');
		
		header('Location:'.RUTA.'login.php');
	}
}else{
	
}


require 'views/registrate.view.php';
?>