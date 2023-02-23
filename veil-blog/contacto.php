<?php session_start();
  require 'admin/config.php';
  require 'functions.php';
$conexion = conexion($bd_config);

if (!$conexion) {
	header('Location: error.php');
}

$ver = mostrar_metadatos($conexion,1);
$metatitulo=$ver['titulo'];
$metadescripcion = $ver['descripcion']; 
$keywords= $ver['keywords'];

$errores="";
$success="";
if ($_SERVER['REQUEST_METHOD']=='POST') {
	$nombre = $_POST['nombre'];
	$correo = $_POST['email'];
	$mensaje = $_POST['mensaje'];
	
	if (!empty($nombre)) {
		// $nombre = trim($nombre);
		// $nombre = htmlspecialchars($nombre);
		// $nombre = stripslashes($nombre);
		$nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
	} else {
		$errores .= 'Por favor agrega un nombre <br />';
	}
	if (!empty($correo)) {
		$correo = filter_var($correo, FILTER_SANITIZE_EMAIL);

		if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
			$errores .= 'Por favor ingresa un correo valido <br />';
		}
	} else {
		$errores .= 'Por favor agrega un correo';
	}
	$para = "veryveils@gmail.com";
	$asunto = "Enviado desde la WEB";
	$mensaje = "De: ".$nombre."<br>\n".$correo."<br>\r\n".$mensaje."\r\n";
	$headers = "From: $correo" . "\r\n" . "CC: destinatarioencopia@email.com";
	/* En From: cambie el email con el correo que eceas recibir los mensajes
		Importante que para que @mail(); funcione debes tener creado una cuenta email en tu servidor Hosting parra que aya una comunicacion
	*/
	
	
	$mail = @mail($para, $asunto, $mensaje, $headers);
	
	if($mail){
		#echo "Mensaje Enviado";
		$success = "Mensaje Enviado Correctamente";
	}else{
		$errores = "Error con el Servidor SMTP verifique su coneccion";
		#echo "No se pudo enviar";
	}

}

$titulo = "contacto";
$ver = mostrar_pagina($conexion,$titulo);

 require 'views/contacto.view.php';

?>