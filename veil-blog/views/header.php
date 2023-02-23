
<!DOCTYPE html>
<html>
<head>
	<?php
	$metatitulo = (isset($metatitulo)) ? $metatitulo : $metatitulo = "meta titulo predeterminada general";
	$metadescripcion = (isset($metadescripcion)) ? $metadescripcion : $metadescripcion = "meta descripcion predeterminada general";
	$keywords = (isset($keywords)) ? $keywords : $keywords = "html, asp,mysql, diseño, blog, etc.";
	$rutacss = (isset($rutacss)) ? $rutacss : "";

	$nombreperfil = (isset($_SESSION['nombre'])) ? "Bienvenido: " . $_SESSION['nombre'] : "";

	$titulo = "sociales";
	$verw = mostrar_pagina($conexion,$titulo);
	$general = mostrar_pagina_id($conexion,1);

	$icono = mostrar_pagina_id($conexion,1);
	#print_r($general);
	#echo $ver['descripcion_larga'];
	?>

	<title><?php echo $metatitulo; ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimum-scale=1.0">
	<meta name="description" content="<?php echo $metadescripcion ?>" />
	<meta name="keywords" content="<?php echo $keywords ?>">

	<link rel="icon" type="image/png" href="<?php echo RUTA ."imagenes/". $icono['thumb']; ?>" />

	<link rel="stylesheet" type="text/css" href="<?php echo RUTA; ?>css/estilos.css">
	<link rel="stylesheet" type="text/css" href="<?php echo RUTA; ?>css/dashicons.css">
	<link rel="stylesheet" type="text/css" href="<?php echo RUTA . $rutacss; ?>">
	<script src="js/jquery-3.5.1.js" type="text/javascript"></script>
	<script src="js/fixed.js" type="text/javascript"></script>

</head>
<body>
<div class="header_fondo">
	<div class="header_top">
		<div class="htop">
			<ul class="login_top">
				<?php if(isset($_SESSION['nombre'])){ ?>
				<li><a href="<?php echo RUTA; ?>admin/cerrar.php">Cerrar sesión</a></li> |
				<li><a href="<?php echo RUTA; ?>admin/perfil.php">Panel de control</a></li>
				<?php }else{ ?>
				<li><a href="<?php echo RUTA; ?>registrate.php">Registrate</a></li> |
				<li><a href="<?php echo RUTA; ?>admin/">Iniciar Secion</a></li>
				<?php } ?>

			</ul>
			<?php if(isset($_SESSION['nombre'])){ ?>
			<ul class="top_nombre">
				<li><a href="<?php echo RUTA;?>admin/"><?php echo $nombreperfil; ?></a></li>
			</ul>
			<?php }else{ ?>
			<ul class="socializa">
				<li><a href="<?php echo $verw['descripcion']; ?>" target="_blank"><img src="imagenes/svg/facebook-f.svg"></a></li>
				<li><a href="<?php echo $verw['keywords']; ?>" target="_blank"><img src="imagenes/svg/twitter.svg"></a></li>
				<li><a href="<?php echo $verw['link']; ?>" target="_blank"><img src="imagenes/svg/youtube.svg"></a></li>
			</ul>
			<?php } ?>
		</div>
	</div>
	<div class="header">
		<div class="logo">
			<div class="logo_texto">
				<h2><a href="<?php echo RUTA; ?>"><?php echo $general['titulo']; ?></a></h2>
				<p><?php echo $general['descripcion']; ?></p>
			</div>
		</div>
		<div class="menu">
			<div class="menu_nav">
				<label for="btn_menu"><img src="imagenes/svg/menu.svg"></label>
				<input type="checkbox" id="btn_menu">
				<ul class="ul_right movil">
					<form name="busqueda" class="buscar" action="<?php echo RUTA; ?>buscar.php" method="get">
						<li>
							<input type="text" name="busqueda" placeholder="Buscar">
							<input type="submit" value="Buscar" name="">
						</li>
					</form>
				</ul>
				<ul class="nav">
					<li><a href="<?php echo RUTA; ?>"><span class="active"></span>Inicio</a></li>
					<li><a href="<?php echo RUTA; ?>acerca.php"><span></span>Acerca</a></li>
					<!-- menu stilo con subitems
					<li><a href="#ver"><span></span>Galeria</a>
						<div class="subitem">
							<ul>
								<li><a href="#ver">Item 1</a></li>
								<li><a href="#ver">Item 2</a></li>
								<li><a href="#ver">Item 3</a></li>
								<li><a href="#ver">Item 4</a></li>
							</ul>
						</div>
					</li>
					-->

					<li><a href="<?php echo RUTA; ?>contacto.php"><span></span>Contacto</a></li>
				</ul>
				<ul class="ul_right">
					<form name="busqueda" class="buscar" action="<?php echo RUTA; ?>buscar.php" method="get">
						<li>
							<input type="text" name="busqueda" placeholder="Buscar">
							<input type="submit" value="Buscar" name="">
						</li>
					</form>
				</ul>
			</div>
		</div>
	</div>
</div>
