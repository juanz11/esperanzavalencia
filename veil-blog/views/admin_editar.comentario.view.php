
<?php require 'header.php'; ?>

<div class="contenido">

<div class="contenido_caja">
	<div class="contenedor">
		<div class="categoria">
			<?php require 'sidebar.php'; ?>
		</div>
			
		<div class="articulos admin_articulos">
			<div class="columna admin_colum nuevoa">
				<h2 class="titulo">Editar Comentario</h2>
				<form class="formulario" method="post" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>">
					<input type="hidden" value="<?php echo $tengo['id_comentario']; ?>" name="id_comentario">
					<input type="hidden" value="<?php echo $tengo['id_articulo']; ?>" name="id_articulo">
					<label>Comentario</label>
					<textarea name="comentario"><?php echo $tengo['comentario']; ?></textarea>
					<label>Por el Usuario</label>
					<input type="text" name="usuario" value="<?php echo $tengo['usuario']; ?>">
					<input type="hidden" value="<?php echo $tengo['respuesta']; ?>" name="respuesta">
					<label>fecha </label>
					<input type="text" name="fecha" value="<?php echo $tengo['fecha']; ?>">
					<label>Correo</label>
					<input type="text" name="correo" value="<?php echo $tengo['correo']; ?>">
					<label>Sitio Web</label>
					<input type="text" name="sitioweb" value="<?php echo $tengo['sitioweb']; ?>">

					<input type="submit" value="Modificar Articulo" name="">
				</form>
			</div>
		</div>

	<!-- Paginacion -->
</div>
<!-- Categorias -->
</div>

</div>

<?php require 'footer.php'; ?>