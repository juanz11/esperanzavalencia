<?php
$respuesta = (isset($_GET['id_comen'])) ? $_GET['id_comen'] : "";

	#echo "respuesta dato: ". $respuesta;
if($_SERVER['REQUEST_METHOD'] == 'POST'){

	if (isset($_SESSION['usuario'])) {
		$usuario = $_SESSION['usuario'];
		$email = $_SESSION['email'];
		$sitioweb = "";
	}else{
	$usuario = limpiar($_POST['usuario']);
	$email = limpiarDatos($_POST['email']);
	$sitioweb = limpiarDatos($_POST['sitioweb']);
	}
	$comentario = limpiarDatos($_POST['comentario']);
	$id_articulo = limpiarDatos($_GET['id']);
	$respuesta = ($_GET['respuesta']) ? $_GET['respuesta'] : "";
	#echo "dentro del if request method : " . $id_articulo."<br>";
	#echo "dentro del if request method : " . $respuesta;
				#($_POST['categoria']) ? $_POST['categoria'] : $_POST['select'];

	$statement = $conexion -> prepare('INSERT INTO comentarios (id_comentario, id_articulo, comentario, usuario, respuesta, correo, sitioweb) VALUES  (null, :id_articulo,:comentario, :usuario, :respuesta, :correo, :sitioweb)');
	$statement -> execute(array(
					'id_articulo' => $id_articulo,
					'comentario' => $comentario,
					':usuario' => $usuario,
					':respuesta' => $respuesta,
					':correo' => $email,
					':sitioweb' => $sitioweb
	));
	echo "<script> window.location='single.php?id=".$id_articulo . "' </script>";
	#echo $respuesta ;
}


?>
<div class="comentar" id="comentar">
	<h3>Deja tu comentario</h3>
	<p>Su direccion de correo electronico no sera ublicada, los campos obligatorios estan marcados.</p>
	<form action="single.php?id=<?php echo $post['id_articulo'].'&respuesta='.$respuesta; ?>" method="post">
		<span> <?php echo $respuesta = (isset($_GET['usuario'])) ? "Respondiendo a: ". $_GET['usuario'] : ""; ?><span>
		<textarea placeholder="Escriba aquí su comentario" name="comentario" required>
		</textarea>

		

		<?php if(isset($_SESSION['usuario'])){?>
		<h5>Comentando como: <?php echo $_SESSION['usuario']; ?></h5><br>	
		<?php }else{?>
		<input type="text" placeholder="Nombreo usuario" name="usuario" required>
		<input type="text" placeholder="Email" name="email" required>
		<input type="text" placeholder="Sitio web" name="sitioweb" required>
		<?php } ?>
		<input type="submit" value="Publicar comentario" name="btncomentario">
	</form>
</div>





<?php
#echo $post['id_articulo'].'&id='.$respuesta;
$id_articulo=$post['id_articulo']; 
$comentario=mostrar_comentarios($conexion,$id_articulo);


?>
<div class="comentar comentario">
	<?php foreach($comentario as  $mostrar): ?>
	<div class="comentario_id" id="id_comentario">
		<div class="comentario_img">
			<img src="imagenes/iconos/comentario.png">
		</div>
		<div class="comentario_texto">
			<h6>Usuario: <span><?php echo $mostrar['usuario']; ?> </span> || Fecha: <?php echo $mostrar['fecha']; ?></h6>
			<p><?php echo $mostrar['comentario']; ?></p>
			<span><a href="single.php?id=<?php echo $mostrar['id_articulo']; ?>&id_comen=<?php echo $mostrar['id_comentario']; ?>&usuario=<?php echo $mostrar['usuario']; ?>&#comentar">Responder</a></span>
		</div>
			<!-- Para la respuesta de los comentarios si lo ubiera -->
			<?php 
				$id_comentario = $mostrar['id_comentario'];
				$respuesta=mostrar_comentarios_respuestas($conexion,$id_articulo,$id_comentario);
			foreach($respuesta as  $mos): ?>
			<ul class="comentario_id"  id="id_comentario">
				<li class="comentario_img">
					<img src="imagenes/iconos/respuesta.png">
				</li>
				<li class="comentario_texto">
					<h6>Usuario: <span><?php echo $mos['usuario']; ?></span> || Fecha: <?php echo $mos['fecha']; ?></h6>
					<p><?php echo $mos['comentario']; ?></p>
				</li>
			</ul>
			<?php endforeach;?>
			<!-- Fin del recorrido de las respuestas sobre un comentario si lo ubiera -->
	</div>
	<?php endforeach;?>
</div>