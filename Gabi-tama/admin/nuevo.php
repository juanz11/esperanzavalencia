<?php session_start();

require 'config.php';
require '../functions.php';

$conexion = conexion($bd_config);
if(!$conexion){
	header('Location: ../error.php');
}
comprobarSession();
comprobarStatus();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$titulo = limpiarDatos($_POST['titulo']);
	$extracto = limpiarDatos($_POST['extracto']);
	$texto = $_POST['texto'];
	$thumb = $_FILES['thumb']['tmp_name'];
	$categoria = ($_POST['categoria']) ? $_POST['categoria'] : $_POST['select'];
	$keywords = $_POST['keywords'];
	#_________________________________
	
	#_________________________________
	#echo "d : " . $thumb . "<br>";
	$archivo_subido = '../' .  $blog_config['carpeta_imagenes'] . $_FILES['thumb']['name'];

	move_uploaded_file($thumb, $archivo_subido);
	#echo $archivo_subido."<br>";
	#echo $thumb;


	$statement = $conexion -> prepare('INSERT INTO articulos (id_articulo, titulo, extracto, texto, thumb, categoria,keywords) VALUES (null, :titulo, :extracto, :texto, :thumb, :categoria,:keywords)');
	$statement -> execute(array(
		':titulo' => $titulo,
		':extracto' => $extracto,
		':texto' => $texto,
		':thumb' => $_FILES['thumb']['name'],
		':categoria' => $categoria,
		':keywords' => $keywords
	));

	#header('Location: ' . RUTA . '/admin');
}
   $select = cantidad_por_categoria($conexion);

require '../views/nuevo.view.php';

?>
