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
					<h2>SEO</h2>
				</div>
			</div>
			<?php if($resultado ==""){}else{ ?>
				<div class="columna admin_colum success">
					<div class="admin_article">
						<span><?php echo $resultado; ?> </span>
						Ver aqui: <a href="../sitemap.xml" target="_blank">sitemap.xml</a>
					</div>
				</div>
			<?php } ?>
			<div class="columna admin_colum nuevoa">
				<div class="admin_article">

					<div class="comentario_img">
						<img src="../imagenes/iconos/comentario.png">
					</div>
					<div class="comentario_texto">
					<h5 class="titulo">pagina principal (predeterminado)</h5>
					<br>
					<form class="formulario" method="post" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>">
					<input type="hidden" name="id_metadato" value="<?php echo $ver['id_metadato']; ?>">
					<input type="hidden" name="id_pagina" value="<?php echo $ver['id_pagina']; ?>">
					<input type="hidden" name="link" value="<?php echo $ver['link']; ?>">

					<label>Titulo</label> <span>(30 a 65 caracteres recomendaos)</span>
					<input type="text" name="titulo" value="<?php echo $ver['titulo']; ?>">
					<label>Descripción</label> <span>(120 a 320 caracteres recomendaos)</span>
					<textarea name="descripcion"><?php echo $ver['descripcion']; ?></textarea>
					<label>Keywords</label> <span>(ingrese palabras clave separado por comas " , ")</span>
					<input type="text" name="keywords" value="<?php echo $ver['keywords']; ?>">

					<input type="submit" value="Modificar Metadatos" name="">
					</form>
					<span>
						<a href="sitemap.php" class="btn_regenerar">Regenerar SITEMAP</a>
						<h6>los metadatos SEO para las paginas del blog se generarán automaticamente a partir de los siguientes datos</h6>
						<ul>
							<li><h6>Titulo del articulo</h6></li>
							<li><h6>Extracto del articulo</h6></li>
							<li><h6>Keywords del articulo</h6></li>
						</ul>
					</span>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</div>
</div>
<script>

<?php  require '../views/footer.php'; ?>
