<?php require 'header.php'; ?>
<div class="box_login">
	<div class="login_content">
					<h2 class="titulo">Iniciar Sesion</h2>
					<form class="formulario" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
						<input type="text" name="usuario" placeholder="Usuario">
						<input type="password" name="password" placeholder="Contraseña">
						<input type="submit" value="Iniciar Sesion">
					</form>
					
					<?php
					if($errores == ""){}else{
					 echo "<div class='error'>". $errores."</div>";}
					 ?>
	</div>
</div>
<?php require 'footer.php'; ?>