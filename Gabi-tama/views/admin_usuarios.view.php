


<?php 
$rutacss="css/usuario.css"; 
require '../views/header.php'; ?>

<div class="contenido">
<div class="contenido_caja">
	<div class="contenedor">
		<div class="categoria">
			<?php require 'sidebar.php'; ?>
		</div>

		<div class="articulos admin_articulos">
			<div class="columna admin_colum">
				<div class="admin_article">
					<h2 class="titulo">Todos los Usuarios</h2>

					<?php
					if (isset($_GET['resultado'])) {
						$resultado = ($_GET['resultado']=='error')? "<h2 class='error'>Una cuenta administrador no se puede eliminar, si decea eliminarlo cambie a estado Suscriptor</h2>" : "Eliminado correctamente";
						echo $resultado;
					}
					if (isset($_GET['result'])) {
						$resultado = ($_GET['result']=='error')? "<h2 class='success'>Se edito correctamente mas no podra editarse el status administrador ya que hay un solo administrador</h2>" : "Cambiado a Suscriptor correctamente";
						echo $resultado;
					}
					?>

					<?php foreach($usuario as $usuario): ?>
					<div class="usuarios_all">
						<div class="usuario_dato">
							<h4><label>Id de usuario  : </label><?php echo $usuario['id_usuario']?></h4>
							<h4><label>Nombre  : </label><?php echo $usuario['nombre']?></h4>
							<h4><label>Usuario  : </label><?php echo $usuario['usuario']?></h4>
							<h4><label>Correo  : </label><?php echo $usuario['email']?></h4>
							<h4><label>Fecha Registro  : </label><?php echo $usuario['fecha_registro']?></h4>
							<h4><label>Status  : </label><?php echo ($usuario['status']==0) ? "Administrador" : "Suscriptor";?></h4>
						</div>
						<div class="usuario_img">
							<img src="../imagenes/avatar/<?php echo $usuario['avatar']?>.jpg">
						</div>
						<div class="usuario_edit">
							<a href="editar.usuario.php?id=<?php echo $usuario['id_usuario']?>">Editar</a>
							<a href="borrar.usuario.php?id=<?php echo $usuario['id_usuario']?>">Borrar</a>
						</div>
					</div>
				<?php endforeach; ?>
					
				</div>
			</div>
		</div>

		

		<!-- inicio paginacion para usuarios-->
		<?php $numero_paginas = numero_paginas_por_usuario($blog_config['post_por_pagina'], $conexion); ?>
		<div class="paginacion">
			<ul>
				<?php if(pagina_actual() === 1): ?>
					<li class="disabled">&laquo;</li>
				<?php else: ?>
					<li><a href="usuarios.php?p=<?php echo pagina_actual() -1 ?>">&laquo;</a></li>
				<?php endif; ?>

				<?php for($i = 1; $i <= $numero_paginas; $i++): ?>
					<?php if(pagina_actual() === $i): ?>
						<li class="active"><?php echo $i; ?></li>
					<?php else: ?>
						<li><a href="usuarios.php?p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
					<?php endif; ?>
				<?php endfor; ?>

				<?php if(pagina_actual() == $numero_paginas): ?>
					<li class="disabled">&raquo;</li>
				<?php else: ?>
					<li><a href="usuarios.php?p=<?php echo pagina_actual() + 1; ?>">&raquo;</a></li>
				<?php endif; ?>
			</ul>
		</div>
		<!-- fin paginacion para usuarios-->
		
	</div>
</div>
</div>

<?php  require '../views/footer.php'; ?>

