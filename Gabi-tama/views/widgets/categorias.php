
<div class="categorias">
	<h3>Categorias</h3>
	<?php $cat= cantidad_por_categoria($conexion); ?>
	
	<ul>
		<?php foreach($cat as $cat): ?>
		<li><a href="<?php echo RUTA; ?>?categoria=<?php echo $cat['categoria'];?>"><?php echo $cat['categoria'];?><span><?php echo $cat['count(*)'];?></span></a></li>
		<?php endforeach; ?>
	</ul>
</div>
