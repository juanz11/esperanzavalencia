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
					<h2>ACERCA</h2>
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
					<input type="hidden" name="titulo" value="<?php echo $ver['titulo']; ?>">

					<label>Desccripcion Corta</label> <span>(120 a 320 caracteres recomendaos)</span>
					<textarea name="descripcion" class="txtmini"><?php echo $ver['descripcion']; ?></textarea>
					<label>Descripción</label> <span>(se permite html)</span>
					<textarea name="descripcion_larga"><?php echo $ver['descripcion_larga']; ?></textarea>
					<label>Keywords</label> <span>(ingrese palabras clave separado por comas " , ")</span>
					<input type="text" name="keywords" value="<?php echo $ver['keywords']; ?>">
					<input type="hidden" name="link" value="<?php echo $ver['link']; ?>">
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
