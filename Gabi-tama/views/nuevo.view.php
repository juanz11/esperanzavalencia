
<?php  require 'header.php';  ?>

<div class="contenido">
	<div class="contenido_caja">
		<div class="contenedor">
			<div class="categoria">
			<?php require 'sidebar.php'; ?>
			</div>

			<div class="articulos admin_articulos">
				<div class="columna admin_colum nuevoa">
					<h2 class="titulo">Nuevo Articulo</h2>
					<form class="formulario" method="post" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>">
						<label>Titulo</label>
						<input type="text" name="titulo" placeholder="Titulo del articulo" required>
						<label>Estracto</label>
						<textarea  class="txtmini" name="extracto" placeholder="Extracto el articulo" required>
						</textarea>
						<div class="txt_categoria">
							<div class="text_box_cat">
								<label>Seleccionar categoria</label>
								<select name="select" class="cat_select">
									<option value="">Selecciona una categoria o Crea >></option>
								<?php  foreach($select as $select): ?>
									<option value="<?php echo $select['categoria']; ?>">
										<?php echo $select['categoria']; ?>
									</option>
								<?php endforeach; ?>
								</select>
							</div>
							<div class="text_box_cat">
								<label>Crear Nueva categoria</label>
								<input class="cat_text cat_new" type="text" name="categoria" placeholder="Categoria">
							</div>
						</div>
						<label>Keywords</label>
						<input type="text" name="keywords" placeholder="insgrese keywords separado por comas" required>
						<label>Descripcion</label>
						<textarea id="texto" class="ckeditor" name="texto" placeholder="Texto del articulo">
						</textarea>
						<input type="file" name="thumb">
						<input type="submit" value="Crear Articulo" name="">
						<br><br><hr><br>
						
						<h6>Titulo recomendado de 30 a 65 caracteres para SEO</h6>
						<h6>Extracto o descripcion breve recomendado de 120 a 320 caracteres para SEO</h6>
						<h6>Keywords recomendado de 3 a 7 palabras clave para seo separado por comas</h6>
						<h6>Estos 3 datos se pasaran automaticamente para los metadatos SEO</h6>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>



<?php require 'footer.php'; ?>