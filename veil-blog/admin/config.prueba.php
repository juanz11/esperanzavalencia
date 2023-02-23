<?php
/*
	Si la instalacion automatica no le funciono puede usar meiante estos archivos
	cmabiando de nombre de archivo de: config.prueba.php a config.php
*/

define('RUTA', 'http://tudominio.com');
$bd_config = array(	'host' => 'direcciondelHostoServidor',
					'basedatos' => 'nombrebasedatos',
					'usuario' => 'usuario',
					'pass' => 'password'
);

$blog_config = array('post_por_pagina' => '6', 'carpeta_imagenes' => 'imagenes/');

/*
Puede cambiar el numero de:
'post_por_pagina' => '6'

el numero '6' es la cantidad de articulos que se mostrara por pagina
si decea mostrar mas articulos por pagina puede aumentar el numero o disminuir 



*/


?>