
<?php require 'header.php'; ?>

<div class="contenido">
	<div class="contenido_caja">
		
		<div class="categoria">
			<?php require 'views/widgets/perfil.php';?>
			<?php require 'views/widgets/boxsocial.php';?>
			<?php require 'views/widgets/categorias.php'; ?>
		</div>
		<div class="articulos">
			<div class="resulbuscar">
				<h2><?php echo $titulo; ?></h2>
			</div>
			<?php foreach($resultados as $post): ?>
			<div class="columna">
				<div class="img">
					<a href="single.php?id=<?php echo $post['id_articulo']; ?>">
						<img src="<?php echo RUTA; ?>imagenes/<?php echo $post['thumb']; ?>">
					</a>
				</div>
					<div class="texto">
						<a href="single.php?id=<?php echo $post['id_articulo']; ?>">
							<h2><?php echo $post['titulo']; ?></h2>
						</a>
						<p>
							<?php echo $post['extracto']; ?>
						</p>
						<div class="entrar">
							<a href="#"></a>
							<a href="#">∑</a>
							<a href="single.php?id=<?php echo $post['id_articulo']; ?>" class="ver_r">Ver</a>
						</div>
					</div>
			</div>
			<?php endforeach; ?>
		</div>
		<?php #require 'paginacion.php'; ?>
		
	</div>
</div>


<?php require 'footer.php'; ?>









