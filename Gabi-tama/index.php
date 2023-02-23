<?php session_start();

if (!file_exists("admin/config.php")) {
	header("Location: instalador/index.php");
}
 require 'admin/config.php';
 require 'functions.php';

 $conexion = conexion($bd_config);

if (!$conexion) {
	header('Location: error.php');
}

/* ---------  url amigable ---------  */


if(isset($_GET['categoria'])){

	$categoria = $_GET['categoria'];
	$post = obtener_post_por_categorias($blog_config['post_por_pagina'], $conexion,$categoria);
}else{

	$post = obtener_post($blog_config['post_por_pagina'], $conexion);
}

#____________________________________________________
if(!$post){
	header('Location: error.php?error=datos');
}

$ver = mostrar_metadatos($conexion,1);

$metatitulo=$ver['titulo'];
$metadescripcion = $ver['descripcion'];
$keywords= $ver['keywords'];

 require 'views/index.view.php';

?>
