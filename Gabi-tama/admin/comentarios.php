<?php session_start();

require 'config.php';
require '../functions.php';

comprobarSession();
comprobarStatus();

$conexion = conexion($bd_config);
if(!$conexion){
	header('Location: ../error.php');
}
#$post = obtener_post($blog_config['post_por_pagina'], $conexion);
#$post_por_pagina = 4;
$ver = obtener_comentarios($blog_config['post_por_pagina'], $conexion);

#print_r($ver);

require '../views/admin_comentarios.view.php';

?>