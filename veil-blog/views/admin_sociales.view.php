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
					<h2>SOCIALIZA</h2>
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

					<label>Facebook</label> <span> (Url)</span>
					<input type="text" name="descripcion" value="<?php echo $ver['descripcion']; ?>">
					<label>Twitter</label> <span>(Url)</span>
					<input type="text" name="keywords" value="<?php echo $ver['keywords']; ?>">
					<label>Youtube</label> <span>(Url)</span>
					<input type="text" name="link" value="<?php echo $ver['link']; ?>">

					<label>caja de pagina facebook</label> <span>(iFrame Ejemplo: <a href="https://developers.facebook.com/docs/plugins/page-plugin" target="_blank">facebook Caja BOX(obtener codigo)</a>)</span>
					<textarea name="descripcion_larga">
						<?php echo $ver['descripcion_larga']; ?>
					</textarea>
					<label> 0 </label> <span>(si no tienes o no puedes obtener un iFrame de facebook,  agrega aqui el usuario de tu pagina y deja en blanco la casilla de arriba y se generara automaticamente<br> <br> ejemplo: de https://web.facebook.com/veilsman de esta url de pagina facebook agrega solo el usuario que esta al final de la url "veilsman" )</span>
					<input type="text" name="facebookpage" value="">


					<input type="hidden" name="thumb" value="<?php echo $ver['thumb']; ?>">

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
