
<?php require 'header.php'; ?>

<div class="contenido">

<div class="contenido_caja">
	<div class="contenedor">
		<div class="categoria">
			<?php require 'sidebar.php'; ?>
		</div>
			
		<div class="articulos admin_articulos">
			<div class="columna admin_colum nuevoa">
				<h2 class="titulo">Editar Usuario</h2>
				<form class="formulario" method="post" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>">
					
					<input type="hidden" value="<?php echo $tengo['id_usuario']; ?>" name="id_usuario">
					
					<label>Usuario</label>
					<input type="hidden" value="<?php echo $tengo['usuario']; ?>" name="usuario">
					<input type="text" name="usuario" value="<?php echo $tengo['usuario']; ?>" disabled>

					<label>Contraseña</label>
					<input type="password" name="password" value="<?php echo $tengo['password']; ?>">

					<label>Email</label>
					<input type="hidden" value="<?php echo $tengo['email']; ?>" name="email">
					<input type="text" name="email" value="<?php echo $tengo['email']; ?>" disabled>

					<label>Nombre</label>
					<input type="text" name="nombre" value="<?php echo $tengo['nombre']; ?>">

					<label>Fecha registro</label>
					<input type="text" name="fecha_registro" value="<?php echo $tengo['fecha_registro']; ?>">

					<label>Status</label>
					<select name="status">
						<option value="<?php echo $tengo['status']; ?>"><?php 
						echo $estatus = ($tengo['status'] == 0) ? "Administrador" : "Suscriptor"; 
						?></option>
					</select>

					<label> Avatar</label>
					<select name="avatar">
						<option value="<?php echo $tengo['avatar']; ?>"><?php echo $tengo['avatar']; ?>.jpg</option>
						<option value="<?php echo $tengo['avatar']; ?>">--------- Cambiar a: ---------</option>
						<option value="hombre_1">hombre_1.jpg</option>
						<option value="hombre_2">hombre_2.jpg</option>
						<option value="hombre_3">hombre_3.jpg</option>
						<option value="hombre_4">hombre_4.jpg</option>
						<option value="hombre_5">hombre_5.jpg</option>
						<option value="hombre_6">hombre_6.jpg</option>
						<option value="hombre_7">hombre_7.jpg</option>
						<option value="mujer_1">mujer_1.jpg</option>
						<option value="mujer_2">mujer_2.jpg</option>
						<option value="mujer_3">mujer_3.jpg</option>
						<option value="mujer_4">mujer_4.jpg</option>
						<option value="mujer_5">mujer_5.jpg</option>
						<option value="mujer_6">mujer_6.jpg</option>
						<option value="mujer_7">mujer_7.jpg</option>
					</select>
					<br><br>
					<input type="submit" value="Modificar Articulo" name="">
				</form>
			</div>
		</div>
</div>
<!-- Categorias -->
</div>

</div>

<?php require 'footer.php'; ?>