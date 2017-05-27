<?PHP
require_once("./include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link rel="stylesheet" type="text/css" href="css/common.css">
		<title>Tablón de Novedades y Noticias</title>
	</head>
	<body>
	<div class="main-container">
		<p> ACTUALIZACIÓN: VERSIÓN 0.2.0 </p>
		<p> ¡Esta es la actualización más grande hasta el momento de World Puzzles! </p>
		<p> ¿Qué novedades trae? </p>
		<p> - Nuevas funciones: Música y Registro (añadido a la nueva pantalla de configuración) </p>
		<p> - Se ha mejorado el servidor y a partir de ahora, todo el mundo que se registre, será capaz de poder guardar su progreso. </p>
		<p> - Se han añadido 2 nuevos Puzzles a Sevilla, dejándolo completamente terminado. </p>
		<p> - Se han realizado cambios múltiples en el sistema de Puzzles. Obsérvalos <a href="update-changes.php"> aquí </a> </p>
		<p> - Se han actualizado las preguntas frecuentes para resolver algunas dudas de la nueva actualización. </p>
		<p> Por favor, si tienes algún problema, contacta con: "primitech.studios@gmail.com" </p>
		
		<p> ¿Podrás resolver el mundo del Puzzle? </p>
		<p> ¡Muchas gracias! </p>
		<p> &copy; 2016 - 2017 Primitech Studios </p>
	</div>
	</body>
</html>