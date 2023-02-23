<?php session_start();

require 'config.php';
require '../functions.php';

comprobarSession();

$conexion = conexion($bd_config);
if(!$conexion){
	header('Location: ../error.php');
}

if($_SERVER['REQUEST_METHOD'] == 'GET'){
	$id_articulo = limpiarDatos($_GET['id_articulo']);
	$id_comentario = limpiarDatos($_GET['id_comentario']);

	#echo "Resultado:  ". $id_articulo ." y ". $id_comentario;
	$tengo = editarComentario($conexion,$id_comentario,$id_articulo);
}else{
	
}
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$id_comentario = $_POST['id_comentario'];
	$id_articulo = $_POST['id_articulo'];
	$comentario = limpiarDatos($_POST['comentario']);
	$usuario = limpiarDatos($_POST['usuario']);
	$respuesta = $_POST['respuesta'];
	$fecha = $_POST['fecha'];
	$correo = limpiarDatos($_POST['correo']);
	$sitioweb = limpiarDatos($_POST['sitioweb']);

	$statement = $conexion -> prepare('UPDATE comentarios SET id_comentario=:id_comentario,id_articulo=:id_articulo,comentario=:comentario,usuario=:usuario,respuesta=:respuesta,fecha=:fecha,correo=:correo,sitioweb=:sitioweb WHERE id_comentario=:id_comentario AND id_articulo = :id_articulo');
	$statement -> execute(array(
		'id_comentario' => $id_comentario,
		'id_articulo' => $id_articulo,
		'comentario' => $comentario,
		'usuario' => $usuario,
		'respuesta' => $respuesta,
		'fecha' => $fecha,
		'correo' => $correo,
		'sitioweb' => $sitioweb,
	));
	header('Location: ' . RUTA . '/admin/comentarios.php');


	
}else{
	#echo "No hay POST";
}
require '../views/admin_editar.comentario.view.php';



?>