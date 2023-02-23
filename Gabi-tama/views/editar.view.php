
<?php require 'header.php'; ?>

<div class="contenido">

<div class="contenido_caja">
	<div class="contenedor">
		<div class="categoria">
				<div class="texto admin_panel">
					<h2>Panel de control</h2>
					<hr>
					<a href="index.php" class="btn">Todos los articulos</a>
					<a href="nuevo.php" class="btn">Nuevo articulo</a>
					<br><hr>
					<a href="#categorias.php" class="btn">Todos las categorias</a>
					<a href="#nuevoc.php" class="btn">Nueva categoria</a>
					<br><hr>
					<a href="cerrar.php" class="btn">Cerrar Sesion</a>
				</div>
			</div>
			
		<div class="articulos admin_articulos">
			<div class="columna admin_colum nuevoa">
				<h2 class="titulo">Editar Articulo</h2>
				<form class="formulario" method="post" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>">
					<input type="text" value="<?php echo $post['id_articulo']; ?>" name="id">
					<label>Titulo</label>
					<input type="text" name="titulo" value="<?php echo $post['titulo']; ?>">
					<label>Extracto o Descripción breve</label>
					<input type="text" name="extracto" value="<?php echo $post['extracto']; ?>">
					<label>Categoria</label>
					<input type="text" name="categoria" value="<?php echo $post['categoria']; ?>">
					<label>Keywords</label>
					<input type="text" name="keywords" placeholder="insgrese keywords separado por comas" required value="<?php echo $post['keywords']; ?>">
					<label>Contenido o Descripción</label>
					<textarea name="texto"><?php echo $post['texto']; ?></textarea>
					<input type="file" name="thumb">
					<input type="hidden" name="thumb-guardada" value="<?php echo $post['thumb']; ?>">

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