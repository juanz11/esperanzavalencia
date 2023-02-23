
<?php require 'header.php'; ?>

<div class="contenido">
	<div class="contenido_caja">
		<div class="categoria">

			<?php require 'views/widgets/perfil.php';?>
			<?php require 'views/widgets/boxsocial.php';?>
			<?php require 'views/widgets/categorias.php'; ?>
			<?php require 'views/widgets/sociales.php'; ?>
		</div>

		<div class="articulos">
			<div class="columna tituloindex">
				<?php $general = mostrar_pagina_id($conexion,1); ?>
				<h1><?php echo $general['titulo']; ?></h1>
			</div>
			<?php foreach($post as $post): ?>
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
						<a href="#"><i class="dashicons dashicons-heart"></i></a>
						<a href="single.php?id=<?php echo $post['id_articulo']; ?>" class="ver_r">Ver</a>
					</div>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
		<?php
		if (!isset($_GET['categoria'])) {
	 		#echo "hay categorias";
			require 'paginacion.php';
		} else{
			require 'views/paginacion.por.categorias.php';
			#echo "No hay categorias";
		}
		?>




	</div>
</div>


<?php require 'footer.php'; ?>

