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
		<title>ACTUALIZACIÓN v.0.402</title>
	</head>
	<body>
	<p><a href="news.php"> Volver al Tablón de Noticias </a></p>
	<div class="main-container">
		<p> NUEVO BUGFIX: VERSIÓN 0.402 </p>
		<p> ¿Qué novedades trae? </p>
		<p> - Arreglado un error en la animación de carga del menú inicial del juego. </p>
		<p> ¿Podrás resolver el mundo del Puzzle? </p>
		<p> &copy; 2024 Primitech Studios </p>
	</div>
	</body>
</html>