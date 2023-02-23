<?php session_start();
 require 'admin/config.php';
 require 'functions.php';

$conexion = conexion($bd_config);

if (!$conexion) {
	header('Location: error.php');
}



$ver = mostrar_metadatos($conexion,1);
$metatitulo=$ver['titulo'];
$metadescripcion = $ver['descripcion']; 
$keywords= $ver['keywords'];

$titulo = "acerca";
$ver = mostrar_pagina($conexion,$titulo);

 require 'views/acerca.view.php';

?>