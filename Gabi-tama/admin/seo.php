<?php session_start();

require 'config.php';
require '../functions.php';

$conexion = conexion($bd_config);


if(!$conexion){
	header('Location: ../error.php');
}
comprobarSession();
comprobarStatus();
$id = "1";
$ver = mostrar_metadatos($conexion,$id);

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$id_metadato = $_POST['id_metadato'];
	$id_pagina = $_POST['id_pagina'];
	$link = $_POST['link'];
	$titulo = $_POST['titulo'];
	$descripcion = $_POST['descripcion'];
	$keywords = $_POST['keywords'];


	$sentencia=$conexion->prepare('UPDATE metadatos SET id_metadato = :id_metadato,id_pagina=:id_pagina,titulo=:titulo,descripcion=:descripcion,keywords=:keywords,link=:link WHERE id_metadato=:id_metadato');
	$sentencia -> execute(array(
		'id_metadato' => $id_metadato,
		'id_pagina' => $id_pagina,
		'titulo' => $titulo,
		'descripcion' => $descripcion,
		'keywords' => $keywords,
		'link' => $link
	));
	header('Location: seo.php');
}

$result = (isset($_GET['result'])) ? $_GET['result'] : "";
$resultado = ($result == 1) ? "Tu archivo sitemap.xml se genero correctamente" : "";

require '../views/admin_seo.view.php';

?>