<?php require 'header.php'; ?>

<div class="contenido">
	<div class="contenido_caja">
		<div class="about">
			<div class="img">
				<img src="imagenes/<?php echo $ver['thumb']; ?>">
			</div>
			<div class="texto">
				<p>
					<?php echo $ver['descripcion']; ?>
				</p>
			</div>
			<br><hr><br>
			<div class="texto">
				<?php echo $ver['descripcion_larga']; ?>
			</div>
		</div>
	</div>

</div>

<?php require 'footer.php'; ?>