<?php
$titulo = "sociales";
$ver = mostrar_pagina($conexion,$titulo);
?>

<div class="categorias">
	<h3>Siguenos</h3>
	<ul class="socializa_i">
		<li><a href="<?php echo $ver['descripcion']; ?>" target="_blank"><img src="imagenes/svg/facebook-f.svg"></a></li>
		<li><a href="<?php echo $ver['keywords']; ?>" target="_blank"><img src="imagenes/svg/twitter.svg"></a></li>
		<li><a href="<?php echo $ver['link']; ?>" target="_blank"><img src="imagenes/svg/youtube.svg"></a></li>
	</ul>
</div>