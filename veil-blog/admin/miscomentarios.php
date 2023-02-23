<?php session_start();

require 'config.php';
require '../functions.php';

comprobarSession();

$conexion = conexion($bd_config);
if(!$conexion){
	header('Location: ../error.php');
}
#$post = obtener_post($blog_config['post_por_pagina'], $conexion);
#$post_por_pagina = 4;
$usuario = $_SESSION['usuario'];
#echo "usu ario:  " . $usuario;
$ver = obtener_comentario_por_usuario($blog_config['post_por_pagina'], $conexion,$usuario);

#print_r($ver);

require '../views/admin_miscomentarios.view.php';

?>