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
	header('Location: ' . RUTA . '/admin/comentarios.php');
}

$statement = $conexion -> prepare('DELETE FROM comentarios WHERE id_comentario = :id');
$statement -> execute(array('id' => $id));
echo " : ". $id;
header('Location: ' . RUTA . '/admin/comentarios.php');
?>
