
<?php
	$general = mostrar_pagina_id($conexion,1);

	$metatitulo = $post['titulo'] ." ". $general['titulo'];
	$metadescripcion= $post['extracto'];
	$keywords = $post['keywords'];
	require 'header.php';
?>
<div class="contenido">
	<div class="contenido_caja">

		<div class="articulos single_articulo">
			<div class="columna single_comlumna">
				<div class="single_head">
					<h1><?php echo $post['titulo']; ?></h1>
					<p><?php echo fecha($post['fecha']); ?></p>
					<span><i class="dashicons dashicons-heart"></i></span>
				</div>

				<div class="img">
					<img src="<?php echo RUTA; ?>imagenes/<?php echo $post['thumb']; ?>" alt="<?php echo $post['titulo']; ?>">
				</div>
				<div class="texto single_texto">

						<?php #echo nl2br($post['texto']); ?>
						<?php echo $post['texto']; ?>

					<div class="comparte">
						<h5>Comparte esto:</h5>
						<input type="submit" value="facebook" name="">
						<input type="submit" value="twitter" name="">
						<input type="submit" value="youtube" name="">
					</div>
				</div>
				<div class="mapcategoria">
					<h4>Categorias:<span> <?php echo $post['categoria']; ?> </span></h4>
					<h4>Tags: <span> <?php echo $post['keywords']; ?> </span></h4>
				</div>

				<?php require 'widgets/comentarios.php'; ?>

			</div>
		</div>
		<div class="categoria single_categoria">
			<?php require 'views/widgets/perfil.php';?>
			<?php require 'views/widgets/boxsocial.php';?>
			<?php require 'views/widgets/categorias.php'; ?>
			<?php require 'views/widgets/sociales.php'; ?>
		</div>




	</div>

</div>






<?php require 'footer.php'; ?>
