<?php
try{
	$conexion = new PDO('mysql:host=localhost;dbname=blog','root','');

} catch(PDOExection $e){
	echo "Error: " . $e;
}

#$sentencia = $conexion -> prepare("SELECT SQL_CALC_FOUND_ROWS * FROM articulos WHERE categoria = 'vida' LIMIT 0,1" );
#$sentencia -> execute();
#$r = $sentencia -> fetchAll();
#print_r($r)

$sentencia = $conexion -> prepare('SELECT SQL_CALC_FOUND_ROWS * FROM articulos LIMIT 0, 1');
$sentencia -> execute();
print_r($sentencia -> fetchAll());



?>