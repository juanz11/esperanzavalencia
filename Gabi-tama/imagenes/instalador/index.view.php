<!DOCTYPE html>
<html>
<head>
	<title>Instalando blog</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<div class="logo">
	<img src="../imagenes/iconos/comentario.png">
</div>
<?php if($paso == 0){?>
<div class="contenido">
	<center><h1>Asistente de Instalación</h1></center>
	<p>Bienvenido(a) a VeilBlog. Antes de empezar, necesitamos alguna información acerca de la base de datos. Usted necesitará conocer los datos de los siguientes elementos antes de continuar:</p>
	<ul>
		<li>Nombre de la base de datos.</li>
		<li>Nombre de usuario de la base de datos.</li>
		<li>Contraseña de la base de datos.</li>
		<li>Host o servidor de la base de datos.</li>
		<li>Prefijo de la tabla (en el caso que usted desee ejecutar más de un WordPress en una sola base de datos).</li>
	</ul>
	<p class="mrb20">
		Se utilizará esta información para crear un fichero <strong>config.php</strong>. Si por alguna razón no funciona la creación automática de este fichero, no se preocupe. Todo lo que se hace es incluir en un fichero de configuración la información de la base de datos. Usted también puede simplemente abrir <strong>config.manual.php</strong> en un editor de texto, completar con su información, y guardarlo como <strong>config.php</strong>.
	</p>
	<p class="mrb20">
		Con toda seguridad, estos elementos le fueron suministrados por su proveedor de hosting. Si usted no tiene esta información, necesitará contactarse con ellos antes de continuar. Si usted está listo…
	</p>

	<a href="index.php?paso=1" class="btn">¡Vamos!</a>
</div>
<?php } ?>


<?php if($paso == 1){?>
<div class="contenido">
	<?php echo $error; ?>
	<p>
		A continuación usted deberá ingresar los datos de conexión con su base de datos. Si no está seguro acerca de esta información, contacte a su proveedor de hosting.
	</p>
	<form action="" method="POST" class="formulario">
		<label>Nombre de la base de datos</label>
		<input type="text" name="bdname" placeholder="veilblog">

		<label>Nombre de usuario</label>
		<input type="text" name="usuario" placeholder="usuario">

		<label>Contraseña</label>
		<input type="text" name="password" placeholder="contraseña">

		<label>Host o Servidor de la base de datos</label>
		<input type="text" name="host" placeholder="host o servidor">
		<input type="hidden" name="paso" value="2">
		<br><hr><br>
		<label>Instalar en:</label>
		<select name="modo" class="select_form">
			<option value="servidor">Hosting o servidor Real</option>
			<option value="localhost">Localhost</option>
		</select>

		<button  class="btn">¡Vamos!</button>
	</form>

</div>
<?php } ?>




<?php if($paso == 2){?>
<div class="contenido">
	<p>
		¡Muy bien! Usted ha concluido esta parte de la instalación. Ahora veilblog ya puede comunicarse con su base de datos. Si usted está listo, ha llegado el momento de…
	</p>
	<form action="" method="get" class="formulario">
		
		<input type="hidden" name="paso" value="3">
		<button  class="btn">Ejecutar la instalación</button>
	</form>
</div>
<?php } ?>



<?php if($paso == 3){?>
<div class="contenido">
	<h2>Bienvenido(a)</h2><hr>
	<p>
		¡Bienvenido(a) al famoso proceso de instalación de Veilblog en cinco minutos! Simplemente complete la siguiente información y estará a punto de usar la más extensible y potente plataforma de publicación personal en el mundo.
	</p>
	<h3>Información necesaria</h3>
	<p>
		Por favor, proporcione la siguiente información. No se preocupe, usted puede cambiar estos ajustes más adelante.
	</p>
	<form action="" method="POST" class="formulario2">
		<ul>
			<li class="txtlabel">Título del sitio</li>
			<li><input type="text" name="titulo" placeholder="Veilblog"></li>
		</ul>
		<ul>
			<li class="txtlabel">Lema o Eslogan</li>
			<li><input type="text" name="descripcion" placeholder="caminando con Dios"></li>
		</ul>
		<br><hr><br>
		<ul>
			<li class="txtlabel">Nombres y Apellidos</li>
			<li><input type="text" name="nombre" placeholder="Juan villa"></li>
		</ul>
		<ul>
			<li class="txtlabel">Nombre de usuario</li>
			<li><input type="text" name="usuario" placeholder="usuario"></li>
			<span>Importante: Usted necesita este usuario para iniciar sesión.</span>
		</ul>
		<ul>
			<li class="txtlabel">Contraseña nueva</li>
			<li><input type="text" name="password" placeholder="contraseña"></li>
			<span>Importante: Usted necesita esta contraseña para iniciar sesión.</span>
		</ul>
		<ul>
			<li class="txtlabel">Su correo electronico</li>
			<li><input type="text" name="email" placeholder="email"></li>
			<span>Compruebe su dirección de correo con minuciosidad antes de continuar.</span>
		</ul>
		

		<input type="hidden" name="paso" value="2">
		<button  class="btn">Instalar Veilblog</button>
	</form>
</div>
<?php } ?>

<?php 


if($paso == 4){?>
<div class="contenido">
	<h1>Gracias por instalar Veilblog</h1><span>Finalizo la instalacion con exito</span>
	<ul>
		<li><a href="<?php echo RUTA; ?>">Ver mi Blog</a></li>
		<li><a href="<?php echo RUTA. "admin"; ?>">ir al Panel de Control</a></li>
	</ul>
</div>
<?php } ?>

</body>
</html>