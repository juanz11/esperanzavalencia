<?php

 // Copiar el archivo a otra ruta;
    copy("config.php", "c:\\datos.txt");
    // Copiar el archivo con otro nombre:
    copy("datos.txt", "datos-2.txt");
    copy("datos.txt", "datos-3.txt");
    copy("datos.txt", "datos-4.txt");
    // Renombrar el archivo:
    rename("datos-2.txt", "datos---2.txt");
    // Renombrar carpetas:
    rename("miCarpeta1", "miCarpeta1-1");
    rename("./miCarpeta2", "./miCarpeta2-2");
    // Mover el archivo:
    rename("datos-3.txt", "c:\\datos-3-3.txt");
    // Eliminar el archivo:
    unlink("datos-4.txt");
    echo "Proceso finalizado";


/*
		$bdname = "3526212_wpressaaf2806e";
        $usuario = "3526212_wpressaaf2806e";
        $password = "homelight1994";
        $host = "fdb29.awardspace.net";
        $modo = $_POST['modo'];
        $url = $_SERVER['PHP_SELF'];


define('RUTA', 'http://localhost/prueba/conexion.com');
$bd_config = array(	'host' => $host,
					'basedatos' => $bdname,
					'usuario' => $usuario,
					'pass' => $password
);


function conexion($bd_config){
	try{
		$conexion = new PDO('mysql:host='.$bd_config['host'] .';dbname='.$bd_config['basedatos'], $bd_config['usuario'], $bd_config['pass']);
		return $conexion;
	} catch(PDOException $e) {
		return false;
	}
}
$conexion = conexion($bd_config);
if(!$conexion){
	#header('Location: error.php');
	echo "no hay coneccion :C";
}
	$statement = $conexion -> prepare('SELECT * FROM usuarios');
	$statement -> execute();
	$resultado = $statement -> fetch();

	print_r($resultado);
*/

?>