<?php

function conexion($bd_config){
	try{
		$conexion = new PDO('mysql:host='.$bd_config['host'] .';dbname='.$bd_config['basedatos'], $bd_config['usuario'], $bd_config['pass']);
		return $conexion;
	} catch(PDOException $e) {
		return false;
	}
}
function limpiarDatos($datos){
	$datos = trim($datos);
	$datos = stripslashes($datos);
	$datos = htmlspecialchars($datos);
	return $datos;
}
function limpiar($string) {
    $string = preg_replace('/[^a-z0-9]/iu', '', $string);
	return $string;  
}
function pagina_actual(){
	return isset($_GET['p']) ? (int)$_GET['p'] : 1;
}

function obtener_post($post_por_pagina, $conexion){
	$inicio = (pagina_actual()  > 1) ? pagina_actual() * $post_por_pagina - $post_por_pagina : 0;
	$sentencia = $conexion -> prepare("SELECT SQL_CALC_FOUND_ROWS * FROM articulos  LIMIT $inicio, $post_por_pagina");
	$sentencia -> execute();
	return $sentencia -> fetchAll();
}

function obtener_post_por_categoria($post_por_pagina, $conexion, $categoria){
	$inicio = (pagina_actual()  > 1) ? pagina_actual() * $post_por_pagina - $post_por_pagina : 0;
	$sentencia = $conexion -> prepare("SELECT SQL_CALC_FOUND_ROWS * FROM articulos WHERE categoria = $categoria  LIMIT $inicio, $post_por_pagina");
	$sentencia -> execute();
	return $sentencia -> fetchAll();
}

# ________________________________________________

function obtener_post_por_categorias($post_por_pagina, $conexion, $categoria){
	$inicio = (pagina_actual()  > 1) ? pagina_actual() * $post_por_pagina - $post_por_pagina : 0;
	$sentencia = $conexion -> prepare("SELECT SQL_CALC_FOUND_ROWS * FROM articulos WHERE categoria = :categoria limit $inicio, $post_por_pagina");
	$sentencia -> execute(array(':categoria' => $categoria));
	$var = $sentencia -> fetchAll();
	return $var;
}
function cantidad_por_categoria($conexion){
	$sentencia = $conexion -> prepare("SELECT categoria, count(*) FROM articulos group by categoria");
	$sentencia -> execute();
	$res = $sentencia -> fetchAll();
	return $res;
}
function mostrar_comentarios($conexion,$id_articulo){
	$sentencia = $conexion -> prepare("SELECT * FROM comentarios WHERE id_articulo=$id_articulo AND respuesta=''");
	$sentencia -> execute();
	return $sentencia -> fetchAll();
}
function mostrar_comentarios_respuestas($conexion,$id_articulo,$id_comentario){
	$sentencia = $conexion -> prepare("SELECT * FROM comentarios WHERE id_articulo=$id_articulo AND respuesta= $id_comentario");
	$sentencia -> execute();
	return $sentencia -> fetchAll();
}
function obtener_comentarios($post_por_pagina, $conexion){
	$inicio = (pagina_actual()  > 1) ? pagina_actual() * $post_por_pagina - $post_por_pagina : 0;
	$sentencia = $conexion -> prepare("SELECT SQL_CALC_FOUND_ROWS * FROM comentarios LIMIT $inicio, $post_por_pagina");
	$sentencia -> execute();
	return $sentencia -> fetchAll();
}
function editarComentario($conexion,$id_comentario,$id_articulo){
	$sentencia = $conexion -> prepare("SELECT * FROM comentarios WHERE id_comentario = $id_comentario AND id_articulo = $id_articulo");
	$sentencia -> execute();
	return $sentencia -> fetch();
}
function obtenerUsuario($conexion,$usuario){
	$sentencia = $conexion -> prepare("SELECT * FROM usuarios WHERE usuario =:usuario OR email = :usuario");
	$sentencia -> execute(array(':usuario' => $usuario));
	return $sentencia -> fetch();
}
function obtenerUsuarioId($conexion,$id){
	$sentencia = $conexion -> prepare("SELECT * FROM usuarios WHERE id_usuario =:id");
	$sentencia -> execute(array(':id' => $id));
	return $sentencia -> fetch();
}
function obtenerUsuarios_porPagina($conexion,$usuari_por_pagina){
	$inicio = (pagina_actual()>1) ? pagina_actual() * $usuari_por_pagina -$usuari_por_pagina : 0;
	$sentencia = $conexion -> prepare("SELECT SQL_CALC_FOUND_ROWS * FROM usuarios LIMIT $inicio, $usuari_por_pagina");
	$sentencia -> execute();
	return $sentencia -> fetchAll();
}
function obtener_comentario_por_usuario($post_por_pagina, $conexion, $usuario){
	$inicio = (pagina_actual()  > 1) ? pagina_actual() * $post_por_pagina - $post_por_pagina : 0;
	$sentencia = $conexion -> prepare("SELECT SQL_CALC_FOUND_ROWS * FROM comentarios WHERE usuario = :usuario limit $inicio, $post_por_pagina");
	$sentencia -> execute(array(':usuario' => $usuario));
	$var = $sentencia -> fetchAll();
	return $var;
}

function cantidad_por_status($conexion){
	$sentencia = $conexion -> prepare("SELECT status, count(*) FROM usuarios WHERE status =0  group by status");
	$sentencia -> execute();
	$res = $sentencia -> fetch();
	return $res;
}
function mostrar_articulos($conexion){
	$sentencia = $conexion -> prepare("SELECT id_articulo,titulo FROM articulos");
	$sentencia -> execute();
	$res = $sentencia -> fetchAll();
	return $res;
}
function mostrar_metadatos($conexion,$id){
	$sentencia = $conexion -> prepare("SELECT * FROM metadatos WHERE id_metadato = :id LIMIT 1");
	$sentencia -> execute(array(":id" => $id));
	$res = $sentencia -> fetch();
	return $res;
}
function mostrar_pagina($conexion,$titulo){
	$sentencia = $conexion -> prepare("SELECT * FROM paginas WHERE titulo=:titulo");
	$sentencia -> execute(array(':titulo' =>$titulo));
	return $sentencia -> fetch();
}
function mostrar_pagina_id($conexion,$id_pagina){
	$sentencia = $conexion -> prepare("SELECT * FROM paginas WHERE id_pagina=:id_pagina");
	$sentencia -> execute(array(':id_pagina' =>$id_pagina));
	return $sentencia -> fetch();
}


#___________________________________________-
function new_numero_de_paginas($conexion){
	$sentencia = $conexion -> prepare("SELECT count(*) FROM articulos");
	$sentencia -> execute();
	$res = $sentencia -> fetch();
	return $res;
}
/* ------------------------------------------ */
function numero_paginas($post_por_pagina, $conexion){
	$total_post = $conexion -> prepare('SELECT count(*) FROM articulos');
	$total_post -> execute();
	$total_post = $total_post -> fetch()['0'];

	$numero_paginas = ceil($total_post / $post_por_pagina);
	return $numero_paginas;
}
function numero_paginas_por_categoria($post_por_pagina, $conexion, $categoria){
	$total_post = $conexion -> prepare('SELECT count(*) FROM articulos WHERE categoria = :categoria');
	$total_post -> execute(array(':categoria' => $categoria));
	$total_post = $total_post -> fetch()['0'];

	$numero_paginas = ceil($total_post / $post_por_pagina);
	return $numero_paginas;
}
function numero_paginas_por_comentario($post_por_pagina, $conexion){
	$total_post = $conexion -> prepare('SELECT count(*) FROM comentarios');
	$total_post -> execute();
	$total_post = $total_post -> fetch()['0'];

	$numero_paginas = ceil($total_post / $post_por_pagina);
	return $numero_paginas;
}
function numero_paginas_por_usuario($post_por_pagina, $conexion){
	$total_post = $conexion -> prepare('SELECT count(*) FROM usuarios');
	$total_post -> execute();
	$total_post = $total_post -> fetch()['0'];

	$numero_paginas = ceil($total_post / $post_por_pagina);
	return $numero_paginas;
}
function numero_paginas_por_comentarios($post_por_pagina, $conexion, $usuario){
	$total_post = $conexion -> prepare('SELECT count(*) FROM comentarios WHERE usuario = :usuario');
	$total_post -> execute(array(':usuario' => $usuario));
	$total_post = $total_post -> fetch()['0'];

	$numero_paginas = ceil($total_post / $post_por_pagina);
	return $numero_paginas;
}
class Ruta{

	public function ctrRuta(){
		return "http://localhost/php/";
	}

}

/* ------------------------------------------ */

function id_articulo($id){
	return (int)limpiarDatos($id);
}

function obtener_post_por_id($conexion,$id){
	$resultado = $conexion -> query("SELECT * FROM articulos WHERE id_articulo =	 $id LIMIT 1");
	$resultado = $resultado -> fetchAll();
	return ($resultado) ? $resultado : false;
}

function fecha($fecha){
	$timestamp = strtotime($fecha);
	$meses =['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'];
	$dia = date('d', $timestamp);
	$mes = date('m', $timestamp) - 1;
	$year = date('Y', $timestamp);

	$fecha = "$dia de " . $meses[$mes] . " del $year";
	return $fecha;
}

function comprobarSession(){
	if (!isset($_SESSION['usuario'])) {
		header('Location: ' .  RUTA . 'login.php');
	}
}

function comprobarStatus(){
	if ($_SESSION['status'] == '0') {
		
	}else{
		header('Location: '.RUTA.'admin/perfil.php');
	}
}


/*
	define('METHOD','AES-128-CBC');
	define('SECRET_KEY','123');
	define('SECRET_IV','101712');
	class SED {
		public static function encryption($string){
			$output=FALSE;
			$key=hash('sha512', SECRET_KEY);
			$iv=substr(hash('sha512', SECRET_IV), 0, 16);
			$output=openssl_encrypt($string, METHOD, $key, 0, $iv);
			$output=base64_encode($output);
			return $output;
		}
		public static function decryption($string){
			$key=hash('sha512', SECRET_KEY);
			$iv=substr(hash('sha512', SECRET_IV), 0, 16);
			$output=openssl_decrypt(base64_decode($string), METHOD, $key, 0, $iv);
			return $output;
		}
	}
*/

?>