<?php session_start();

require 'config.php';
require '../functions.php';

$conexion = conexion($bd_config);


if(!$conexion){
	header('Location: ../error.php');
}
comprobarSession();
comprobarStatus();
$titulo = "contacto";
$ver = mostrar_pagina($conexion,$titulo);


if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$id_pagina = $_POST['id_pagina'];
	$titulo = $_POST['titulo'];
	$descripcion = $_POST['descripcion'];
	$descripcion_larga = $_POST['descripcion_larga'];
	$keywords = $_POST['keywords'];
	$thumb = $_FILES['thumb'];
	$link = $_POST['link'];
	$thumb_guardada = $_POST['thumb_guardada'];

	
	if(empty($thumb['name'])){
		$thumb = $thumb_guardada;
	}else{
		$archivo_subido = '../' . $blog_config['carpeta_imagenes'] . $_FILES['thumb']['name'];
		move_uploaded_file($_FILES['thumb']['tmp_name'], $archivo_subido);
		$thumb = $_FILES['thumb']['name'];
		echo $thumb;
	}


	$sentencia=$conexion->prepare('UPDATE paginas SET id_pagina = :id_pagina,titulo=:titulo,descripcion=:descripcion,descripcion_larga=:descripcion_larga,keywords=:keywords,thumb=:thumb,link=:link WHERE titulo=:titulo');
	$sentencia -> execute(array(
		'id_pagina' => $id_pagina,
		'titulo' => $titulo,
		'descripcion' => $descripcion,
		'descripcion_larga' => $descripcion_larga,
		'keywords' => $keywords,
		'thumb' => $thumb,
		':link' => $link
	));
	header('Location: contacto.php');
	
}


require '../views/admin_contacto.view.php';

?>

