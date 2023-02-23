<?php session_start();


require 'config.php';
require '../functions.php';

$conexion = conexion($bd_config);

comprobarSession();

if(!$conexion){
	header('Location: ../error.php');
}
	$perfil = obtenerUsuarioId($conexion,$_SESSION['id_usuario']);
	#print_r($perfil);
	#masvil = obtenerUsuarioId($conexion,$id);
	
	require '../views/admin_perfil.view.php';





?>