<?php 

$codigo = "<?php
define('RUTA', '". $url."');
$"."bd_config = array(	'host' => '". $host."',
					'basedatos' => '". $bdname."',
					'usuario' => '". $usuario."',
					'pass' => '". $password."'
);

$"."blog_config = array('post_por_pagina' => '6', 'carpeta_imagenes' => 'imagenes/');

/* edite la cantidad de post por pagina que decea mostrar cambiando el numero*/

?>";


//Ahora creamos el archivo con el código necesario
$path = "../admin/config.php";
$modo = "w+";

if ($fp=fopen($path,$modo))
{
fwrite ($fp,$codigo);
#echo "Se realizo con Exito";

}
else{
echo "Error al Crearse";
}


?>