<?PHP
require_once("./include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    //$fgmembersite->RedirectToURL("login.php");
    //exit;
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link rel="stylesheet" type="text/css" href="css/common.css">
		<title>ACTUALIZACIÓN v.0.45</title>
	</head>
	<body>
    <p><a href="cities.php"> Volver a la Selección de Niveles </a></p>
    <p><a href="news.html"> Volver al Tablón de Noticias </a></p>
	<div class="main-container">
		<p> NUEVA ACTUALIZACIÓN: VERSIÓN 0.45 </p>
		<p> ¿Qué novedades trae? </p>
        <p> - Llega el Perfil: a partir de ahora, si tienes una cuenta registrada en World Puzzles, podrás ver las puntuaciones de los niveles que hayas jugado. </p>
        <p> - Esperad algunas mejores futuras a la pestaña Perfil. </p>
		<p> - Hemos mejorado la navegabilidad de las páginas más antiguas para que se correspondan con las más recientes. </p>
		<p> - Hemos arreglado algunos enlaces que provocaban errores 404.
        <p> - Hemos cambiado los colores de algunos textos para que sean más visibles. </p>
		<p> ¿Podrás resolver el mundo del Puzzle? </p>
		<p> &copy; 2024 Primitech Studios </p>
	</div>
	</body>
</html>