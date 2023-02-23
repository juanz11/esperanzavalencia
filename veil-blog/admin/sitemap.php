<?php session_start();
require 'config.php';
require '../functions.php';
error_reporting(0);
$conexion = conexion($bd_config);

if (!$conexion) {
	header('Location: error.php');
}
$ver = mostrar_articulos($conexion);

$pages=
"<url>"
."<loc>".RUTA."</loc>"
."<lastmod>2020-08-05T22:32:34+00:00</lastmod>"
."<changefreq>daily</changefreq>"
."<priority>1.00</priority>"
."</url>"
."<url>"
."<loc>".RUTA."acerca.php</loc>"
."<lastmod>2020-08-05T22:32:34+00:00</lastmod>"
."<changefreq>daily</changefreq>"
."<priority>1.00</priority>"
."</url>";


$single ="";
foreach($ver as $ver):
$single .= 
"<url>"
."<loc>".RUTA."single.php?id=".$ver['id_articulo']."</loc>"
."<lastmod>2020-09-05T22:32:34+00:00</lastmod>"
."<changefreq>daily</changefreq>"
."<priority>1.00</priority>"
."</url>";
endforeach;







$end="</urlset>";

$codigo = "<?xml version='1.0' encoding='UTF-8'?>"
."<urlset
      xmlns='http://www.sitemaps.org/schemas/sitemap/0.9'
      xmlns:xsi='http://www.w3.org/2001/XMLSchema-instance'
      xsi:schemaLocation='http://www.sitemaps.org/schemas/sitemap/0.9
            http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd'>"
. $pages . $single. $end;






//Ahora creamos el archivo con el código necesario
$path = "../sitemap.xml";
$modo = "w+";

if ($fp=fopen($path,$modo))
{
fwrite ($fp,$codigo);
echo "Se realizo con Exito";
echo "<a href='sitemap.xml'>sitemap</a>";

#header('Location: seo.php?result=1');
echo "<script type='text/javascript'>
           window.location.assign('seo.php?result=1');
       </script>";

}
else{
#echo "Error al Crearse";
echo "<script type='text/javascript'>
           window.location.assign('seo.php?result=0');
       </script>";
}


?>