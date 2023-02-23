
<?php require '../views/header.php'; ?>

<div class="contenido">
<div class="contenido_caja">
	<div class="contenedor">
		<div class="categoria">
			<?php require 'sidebar.php'; ?>
		</div>

		<div class="articulos admin_articulos">
			<div class="columna admin_colum">
				<div class="admin_article">
					<h2>Todos los articulos</h2>
				</div>
			</div>
		<?php  foreach($post as $post): ?>
			<div class="columna admin_colum">
				<div class="admin_article">
					<h2 class="titulo">id=<?php echo $post['id_articulo'] . ' |  ' . $post['titulo']; ?></h2>
					<a href="editar.php?id=<?php echo $post['id_articulo']; ?>">Editar</a>
					<a href="../single.php?id=<?php echo $post['id_articulo']; ?>">Ver</a>
					<a href="borrar.php?id=<?php echo $post['id_articulo']; ?>">Borrar</a>
				</div>
			</div>
		<?php endforeach; ?>
		</div>

		

		<?php require '../paginacion.php'; ?>
	</div>
</div>
</div>

<?php  require '../views/footer.php'; ?>

