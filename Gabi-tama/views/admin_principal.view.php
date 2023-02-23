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
					<h2>PRINCIPAL</h2>
				</div>
			</div>
			<div class="columna admin_colum nuevoa">
				<div class="admin_article">

					<div class="comentario_img">
						<img src="../imagenes/iconos/comentario.png">
					</div>
					<div class="comentario_texto">
					<h5 class="titulo">pagina <?php echo $ver['titulo']; ?></h5>
					<br>
					<form class="formulario" method="post" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>">

					<input type="hidden" name="id_pagina" value="<?php echo $ver['id_pagina']; ?>">
					<label>Nombre del Sitio web</label>
					<input type="text" name="titulo" value="<?php echo $ver['titulo']; ?>">
					<label>Desccripcion Corta</label> <span></span>
					<input type="text" name="descripcion" value="<?php echo $ver['descripcion']; ?>">
					<label>Dominio del sitio web </label><span>(http://midominio.com ó https://midominio.com)</span>
					<input type="text" name="link" value="<?php echo $ver['link']; ?>">


					<input type="hidden" name="descripcion_larga" value="<?php echo $ver['descripcion_larga']; ?>">
					<input type="hidden" name="keywords" value="<?php echo $ver['keywords']; ?>">
					
					<label>Icono del sitio web</label> <span>(jpg o png de 512px x 512px | <a href="<?php echo  RUTA . 'imagenes/' .$ver['thumb']; ?>" target='_blank'><?php echo $ver['thumb']; ?></a>)</span>
					<input type="file" name="thumb">
					<input type="hidden" name="thumb_guardada" value="<?php echo $ver['thumb']; ?>">

					<input type="submit" value="Modificare Acerca" name="">
					</form>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</div>
</div>
<script>

<?php  require '../views/footer.php'; ?>
