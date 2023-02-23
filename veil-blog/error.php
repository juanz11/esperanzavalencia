
<?php 
require 'admin/config.php';
 require 'functions.php';
$conexion = conexion($bd_config);

$tabla = (isset($_GET['error'])) ? "Cree su primer articulo desde su panel de control <a href='".RUTA."admin/nuevo.php'><h2 style='display:inline-block;color:#ea4848;'>Entrar al Panel</h2></a>" : "";

if (!$conexion) {
	$error = "Error de coneccion con la base de datos";
}

require 'views/header.php'; 
?>

<div class="contenido">
	<div class="contenido_caja">
		<div class="categoria">
			<?php if ($conexion) {?>
			<?php require 'views/widgets/perfil.php';?>
			<?php require 'views/widgets/boxsocial.php';?>
			<?php require 'views/widgets/categorias.php'; ?>
			<?php }else{echo $error;}?>
		</div>

		<div class="articulos">
			<div class="resulbuscar">
				<h3>Error en la busqueda de la pagina solicitada...</h3>
				<h5><?php echo $tabla;?></h5>
			</div>
		</div>
	</div>
</div>


<?php require 'views/footer.php'; ?>

