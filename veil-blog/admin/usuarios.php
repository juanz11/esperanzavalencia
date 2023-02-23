<?php session_start();

require 'config.php';
require '../functions.php';

$conexion = conexion($bd_config);
if(!$conexion){
	header('Location: ../error.php');
}
comprobarSession();
comprobarStatus();
$usuario = obtenerUsuarios_porPagina($conexion,$blog_config['post_por_pagina']);



require '../views/admin_usuarios.view.php';

?>