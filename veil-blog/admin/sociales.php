<?php session_start();

require 'config.php';
require '../functions.php';

$conexion = conexion($bd_config);


if(!$conexion){
	header('Location: ../error.php');
}
comprobarSession();
comprobarStatus();
$titulo = "sociales";
$ver = mostrar_pagina($conexion,$titulo);


if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$id_pagina = $_POST['id_pagina'];
	$titulo = $_POST['titulo'];
	$descripcion = $_POST['descripcion'];
	
	$keywords = $_POST['keywords'];
	$thumb = "";
	$link = $_POST['link'];
	$facebookpage = $_POST['facebookpage'];
	if(!isset($facebookpage)){
		echo "Esta vacio";
		$descripcion_larga = $_POST['descripcion_larga'];
	}else{
		$descripcion_larga = 
		"<iframe src='https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2F".$_POST['facebookpage']."&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId' width='340' height='500' style='border:none;overflow:hidden' scrolling='no' frameborder='0' allowTransparency='true' allow='encrypted-media'></iframe>";
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
	header('Location: sociales.php');
	
}

require '../views/admin_sociales.view.php';

?>

