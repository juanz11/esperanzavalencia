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
					<h2>Todos los comentarios</h2>
				</div>
			</div>
		<?php  foreach($ver as $ver): ?>
			<div class="columna admin_colum">
				<div class="admin_article">
					<div class="comentario_img">
						<?php if($ver['respuesta'] == ""){?>
						<img src="../imagenes/iconos/comentario.png">
						<?php }else{?>
						<img src="../imagenes/iconos/respuesta.png">
						<?php };?>
					</div>
					<div class="comentario_texto">
					<h5 class="titulo">Id comentario:=<?php echo $ver['id_comentario']; ?> | ID Articulo: <?php echo $ver['id_articulo']; ?> | Usuario: <?php echo $ver['usuario']; ?> | Fecha: <?php echo $ver['fecha']; ?> | Correo: <?php echo $ver['correo']; ?> | Sitio Web: <?php echo $ver['sitioweb']; ?></h5>
					<p><?php echo $ver['comentario']; ?></p>
					<a href="editar.comentario.php?id_articulo=<?php echo $ver['id_articulo']; ?>&id_comentario=<?php echo $ver['id_comentario']; ?>">Editar</a>
					<a href="../single.php?id=<?php echo $ver['id_articulo']; ?>?#id_comentario">Ver</a>
					<a href="borrar.comentario.php?id=<?php echo $ver['id_comentario']; ?>">Borrar</a>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
		</div>

		
		<!-- inicio paginacion para comentarios-->
		
		<?php $numero_paginas = numero_paginas_por_comentario($blog_config['post_por_pagina'], $conexion); ?>
		<div class="paginacion">
			<ul>
				<?php if(pagina_actual() === 1): ?>
					<li class="disabled">&laquo;</li>
				<?php else: ?>
					<li><a href="comentarios.php?p=<?php echo pagina_actual() -1 ?>">&laquo;</a></li>
				<?php endif; ?>

				<?php for($i = 1; $i <= $numero_paginas; $i++): ?>
					<?php if(pagina_actual() === $i): ?>
						<li class="active"><?php echo $i; ?></li>
					<?php else: ?>
						<li><a href="comentarios.php?p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
					<?php endif; ?>
				<?php endfor; ?>

				<?php if(pagina_actual() == $numero_paginas): ?>
					<li class="disabled">&raquo;</li>
				<?php else: ?>
					<li><a href="comentarios.php?p=<?php echo pagina_actual() + 1; ?>">&raquo;</a></li>
				<?php endif; ?>
			</ul>
		</div>
		<!-- fin paginacion para comentarios-->
	</div>
</div>
</div>
<script>

<?php  require '../views/footer.php'; ?>

