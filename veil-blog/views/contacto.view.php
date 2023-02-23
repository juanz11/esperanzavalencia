<?php require 'header.php'; ?>
					

<div class="contenido">
	<div class="contenido_caja">
		<div class="about contacto">
			<h1 class="h1contacto">Contactame</h1>
			<div class="texto">
				<?php  echo $ver['descripcion_larga']; ?>
				<ul>
					<li>
						<?php echo $ver['descripcion']; ?>
					</li>
				</ul>

				<form class="formulario" method="post" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>">
					<label>Nombre*</label>
					<input type="text" name="nombre" placeholder="Tu nombre" required>
					<label>Correo electronico*</label>
					<input type="text" name="email" placeholder="Tu Correo electronico" required>
					<label>Mensaje*</label>
					<textarea name="mensaje" placeholder="Escriba su mensaje aquí" required></textarea>
					<button type="submit">Enviar</button>
				</form>
				<?php if(!empty($errores)){ ?>
					<div class="error" style="margin-top: 10px;"><?php echo $errores; ?></div>
				<?php }else{ ?>
					<?php echo $success; ?>
				<?php }; ?>
			</div>
			
		</div>
	</div>

</div>

<?php require 'footer.php'; ?>