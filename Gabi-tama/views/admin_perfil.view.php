
<?php 

$rutacss = "css/usuario.css";
require '../views/header.php'; 
?>

<div class="contenido">
<div class="contenido_caja">
	<div class="contenedor">
		<div class="categoria">
			<?php require 'sidebar.php'; ?>
		</div>
		

		<div class="articulos admin_articulos">
		
			<div class="columna admin_colum">
				<div class="admin_article perfil_us">
					<br>
					<img src="../imagenes/avatar/<?php echo $perfil['avatar']; ?>.jpg">
					<h2 class="titulo">Nombre : <?php echo $perfil['nombre']; ?></h2>
					<h2 class="titulo">Usuario : <?php echo $perfil['usuario']; ?></h2>
					<h2 class="titulo">Correo : <?php echo $perfil['email']; ?></h2>
					<h2 class="titulo">Fecha de registro : <?php echo $perfil['fecha_registro']; ?></h2>
					<br>
				</div>
			</div>
		
		</div>
	</div>
</div>
</div>

<?php  require '../views/footer.php'; ?>

