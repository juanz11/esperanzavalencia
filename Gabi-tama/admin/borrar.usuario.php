<?php session_start();

require 'config.php';
require '../functions.php';

comprobarSession();

$conexion = conexion($bd_config);
if(!$conexion){
	header('Location: ../error.php');
}

$id = limpiarDatos($_GET['id']);

if(!$id){
	header('Location: ' . RUTA . '/admin');
}


$sentencia = $conexion -> prepare("SELECT * FROM usuarios WHERE status = 0 AND id_usuario=$id");
$sentencia -> execute();
$ver = $sentencia -> fetchAll();
if(isset($ver)){ //si es administrador no se borrara
	if(!empty($ver)){
		echo "Hay contenido <br>";
		header('Location: ' . RUTA . '/admin/usuarios.php?resultado=error');
	}else{
		echo "No hay contenido <br>";
		$statement = $conexion -> prepare('DELETE FROM usuarios WHERE id_usuario = :id');
		$statement -> execute(array(':id' => $id));

		header('Location: ' . RUTA . '/admin/usuarios.php');
	}
}else{
	
}





?>
