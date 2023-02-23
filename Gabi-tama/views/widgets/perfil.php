
<?php
$titulo = "acerca";
$ver = mostrar_pagina($conexion,$titulo);
?>


<div class="img">
	<img src="imagenes/<?php echo $ver['thumb']; ?>">
</div>
<div class="texto">
	<p>
		<?php echo $ver['descripcion']; ?>
		
	</p>
	
</div>