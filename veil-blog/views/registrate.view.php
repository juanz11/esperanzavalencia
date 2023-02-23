<?php $rutacss= "css/usuario.css" ?>
<?php require 'header.php'; ?>
<div class="box_login">
	<div class="registro">
		<div class="registro_contenido">
			<h2>Crea una cuenta de Tiendadevida</h2>
			<hr class="border">

			<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" name="formulario" class="formulario">
				<div class="form_texto">
					<div class="form_grupo">
						<input type="text" name="nombre" placeholder="Nombre: " class="mr2px">
						<input type="text" name="apellido" placeholder="Apellido: ">
					</div>
					<input type="email" name="email" placeholder="Correo: ">
					<input type="text" name="usuario" placeholder="Usuario: ">
					<div class="form_grupo">
						<input type="password" name="password" placeholder="Contraseña: " class="mr2px">
						<input type="password" name="password2" placeholder="Repita su contraseña:">
					</div>
					<input type="submit" value="Registrar" name="registrar">
				</div>
				<div class="form_imagen">
					<hr>
					<h3>Avatar de Hombres</h3>
					<hr class="mb20px">
					<ul>
						<label for="hombre_1"><img src="imagenes/avatar/hombre_1.jpg"></label>
						<input type="radio" id="hombre_1" name="avatar" value="hombre_1" required>
					</ul>
					<ul>
						<label for="hombre_2"><img src="imagenes/avatar/hombre_2.jpg"></label>
						<input type="radio" id="hombre_2" name="avatar" value="hombre_2" required>
					</ul>
					<ul>
						<label for="hombre_3"><img src="imagenes/avatar/hombre_3.jpg"></label>
						<input type="radio" id="hombre_3" name="avatar" value="hombre_3" required>
					</ul>
					<ul>
						<label for="hombre_4"><img src="imagenes/avatar/hombre_4.jpg"></label>
						<input type="radio" id="hombre_4" name="avatar" value="hombre_4" required>
					</ul>
					<ul>
						<label for="hombre_5"><img src="imagenes/avatar/hombre_5.jpg"></label>
						<input type="radio" id="hombre_5" name="avatar" value="hombre_5" required>
					</ul>
					<hr>
					<h3>Avatar de Mujeres</h3>
					<hr class="mb20px">
					<ul>
						<label for="mujer_1"><img src="imagenes/avatar/mujer_1.jpg"></label>
						<input type="radio" id="mujer_1" name="avatar" value="mujer_1" required>
					</ul>
					<ul>
						<label for="mujer_2"><img src="imagenes/avatar/mujer_2.jpg"></label>
						<input type="radio" id="mujer_2" name="avatar" value="mujer_2" required>
					</ul>
					<ul>
						<label for="mujer_3"><img src="imagenes/avatar/mujer_3.jpg"></label>
						<input type="radio" id="mujer_3" name="avatar" value="mujer_3" required>
					</ul>
					<ul>
						<label for="mujer_4"><img src="imagenes/avatar/mujer_4.jpg"></label>
						<input type="radio" id="mujer_4" name="avatar" value="mujer_4" required>
					</ul>
					<ul>
						<label for="mujer_5"><img src="imagenes/avatar/mujer_5.jpg"></label>
						<input type="radio" id="mujer_5" name="avatar" value="mujer_5" required>
					</ul>
				</div>
			</form>
				<?php if(!empty($errores)):?>
					<div class="errorform">
						<ul>
							<?php echo $errores; ?>
						</ul>
					</div>
				<?php endif; ?>
				<span class="texto_registrate">
					<p>¿ ya tienes cuenta ?</p>
					<a href="login.php">Iniciar Sesión</a>
				</span>
		</div>
	</div>
</div>
<?php require 'footer.php'; ?>