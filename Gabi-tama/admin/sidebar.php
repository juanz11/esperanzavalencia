<div class="texto admin_panel">
	<h2>Panel de control</h2>
	<hr>
	<?php if ($_SESSION['status'] == '0') {?>
	<a href="index.php" class="btn">Todos los articulos</a>
	<a href="nuevo.php" class="btn">Nuevo articulo</a>
	<br><hr>
	<a href="comentarios.php" class="btn">Todos los comentarios</a>
	<br><hr>
	<a href="usuarios.php" class="btn">Todos los usuarios</a>
	<br><hr>
	<a href="principal.php" class="btn">Principal</a>
	<a href="acerca.php" class="btn">Pagina Acerca</a>
	<a href="contacto.php" class="btn">Pagina Contacto</a>
	<a href="sociales.php" class="btn">Sociales</a>
	<br><hr>
	<a href="seo.php" class="btn">SEO</a>
	<br>
	<h2>Modo Usuario</h2>
	<a href="perfil.php" class="btn">Mi perfil</a>
	<a href="editar.perfil.php" class="btn">Editar Perfil</a>
	<br><hr>
	<a href="miscomentarios.php" class="btn">Mis comentarios</a>
	<br><hr>
	<a href="cerrar.php" class="btn">Cerrar Sesion</a>
	<?php }else{?>
	<a href="perfil.php" class="btn">Mi perfil</a>
	<a href="editar.perfil.php" class="btn">Editar Perfil</a>
	<br><hr>
	<a href="miscomentarios.php" class="btn">Mis comentarios</a>
	<br><hr>
	<a href="cerrar.php" class="btn">Cerrar Sesion</a>
	<?php } ?>
</div>