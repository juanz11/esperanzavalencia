<?php

    $error = "";
    $paso = (isset($_GET['paso'])? $_GET['paso'] : 0);
    #echo "paso: " . $paso;

if($paso == 1){
   if($_SERVER['REQUEST_METHOD']=='POST'){
        $bdname = $_POST['bdname'];
        $usuario = $_POST['usuario'];
        $password = $_POST['password'];
        $host = $_POST['host'];
        $modo = $_POST['modo'];
        $url = $_SERVER['PHP_SELF'];
        error_reporting(0);

        if($modo == 'servidor'){
            $link = $_SERVER[HTTP_HOST] . $_SERVER[REQUEST_URI];
            $escaped_link = htmlspecialchars($link, ENT_QUOTES, 'UTF-8');
            #echo '<br><a href="'.$escaped_link.'">'.$escaped_link.'</a>' . " vida";

            $valor_a_buscar = "instalador/index.php?paso=1";
            $valor_de_reemplazo = "";
            $url = "http://" .  str_replace( $valor_a_buscar , $valor_de_reemplazo , $escaped_link);
        }else{
            $valor_a_buscar = "instalador/index.php";
            $valor_de_reemplazo = "";
            $url = "http://localhost" . str_replace( $valor_a_buscar , $valor_de_reemplazo , $url );
        }
        echo $url;
        
        define('RUTA', 'http://localhost/prueba/conexion.com');
        $bd_config = array( 'host' => $host,
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
            $error = "<p class='error'>Error en la coneccion => verifique bien los datos<p>";
        }else{
            require 'crear.config.php';
            echo "<script type='text/javascript'>
                alert('Conección realizada correctamente, Gracias!!');
                window.location.assign('index.php?paso=2');
                </script>";
            
            
        }
        
   }
}


/*  Creando tabla en la base de datos */
if($paso == 2){
    #echo "<br>ya esta en la parte del paso 2";

    require '../admin/config.php';
    require '../functions.php';

    $conexion = conexion($bd_config);
    if(!$conexion){
        #header('Location: error.php');
        echo "Error en la coneccion con la base de datos";
    }

        

/*  Creando tabla articulo    */
    require 'creartablas.php';

    #echo "Creado correctamente";
/*  Creando tablas    */
}




/*  Paso 3 de la instalcion   */
if($paso == 3){
    require '../admin/config.php';
    require '../functions.php';

    $conexion = conexion($bd_config);
    if(!$conexion){
        #header('Location: error.php');
        echo "Error en la coneccion con la base de datos";
    }


    if($_SERVER['REQUEST_METHOD']=='POST'){
        $titulo = $_POST['titulo'];
        $descripcion = $_POST['descripcion'];

        

        $id_pagina = '1';
        $titulo = limpiarDatos($_POST['titulo']);
        $descripcion = limpiarDatos($_POST['descripcion']);
        $descripcion_larga = "Este es un lugar donde moraremos todo juntos caminando con el Señor Dios todopoderoso, apartado del mal, temeroso de Dios, recto y perfecto en el Señor Jesús.";
        $keywords = "vida, fe, categorías, generales";
        $thumb = "foto.jpg";
        $link = RUTA;

        $sentencia=$conexion->prepare('UPDATE paginas SET id_pagina = :id_pagina,titulo=:titulo,descripcion=:descripcion,descripcion_larga=:descripcion_larga,keywords=:keywords,thumb=:thumb,link=:link WHERE id_pagina=:id_pagina');
        $sentencia -> execute(array(
            'id_pagina' => $id_pagina,
            'titulo' => $titulo,
            'descripcion' => $descripcion,
            'descripcion_larga' => $descripcion_larga,
            'keywords' => $keywords,
            'thumb' => $thumb,
            ':link' => $link
        ));
    /* --------------------   Ahora registramos a los usuarios  ---------------------- */
        $id_usuario = 1;
        $nombre = $_POST['nombre'];
        $usuario = $_POST['usuario'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $status = 0;/* 0=administrador   1=suscriptor*/
        $avatar = "hombre_3";
        $password = hash('sha512', $password);

        $statement = $conexion -> prepare('INSERT INTO usuarios (id_usuario, usuario, password, nombre, email, status,avatar) VALUES (:id_usuario, :usuario, :password, :nombre, :email, :status, :avatar)');
        $statement -> execute(array(
            ':id_usuario' => $id_usuario,
            ':usuario' => $usuario,
            ':password' => $password,
            ':nombre' => $nombre,
            ':email' => $email,
            ':status' => $status,
            ':avatar' => $avatar
        ));

        $datos = obtenerUsuario($conexion, $usuario);
        $_SESSION['id_usuario'] =  $datos['id_usuario'];
        $_SESSION['usuario'] =  $datos['usuario']; 
        $_SESSION['password'] =  $datos['password'];
        $_SESSION['nombre'] =  $datos['nombre'];
        $_SESSION['email'] =  $datos['email'];
        $_SESSION['fecha_registro'] =  $datos['fecha_registro'];
        $_SESSION['status'] =  $datos['status'];
        $_SESSION['avatar'] =  $datos['avatar'];
        #header('Location:'.RUTA .'admin/');
        header('Location: index.php?paso=4');
    }
}


if($paso == 4){
    require '../admin/config.php';
    require '../functions.php';

    $conexion = conexion($bd_config);
    if(!$conexion){
        #header('Location: error.php');
        echo "Error en la coneccion con la base de datos";
    }

}
    
    require 'index.view.php';


?>