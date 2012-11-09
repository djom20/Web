<?php
	ob_start( 'ob_gzhandler' );
	header('Vary: Accept-Encoding');
	$cache_expire = 60*60*24*365;
	header("Pragma: public");
	header("Cache-Control: max-age=".$cache_expire);
	header('Expires: ' . gmdate('D, d M Y H:i:s', time()+$cache_expire) . ' GMT');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
<meta http-equiv="window-target" content="_top" >
<meta http-equiv="expires" content="Sat, 4 Feb 2012 16:05:00 GMT" > <!-- FECHA EN QUE EXPIRA LA WEB -->
<meta http-equiv="refresh" content="10;URL=../../index.php" > <!-- TIEMPO EN LA CUAL SE RECARGARA LA PAGINA A ESTA -->
<!--
<META HTTP-EQUIV="Cache-Control" CONTENT="no-cache"> 
-->

<meta name="robots" content="index">
<META name="robots" content="NOARCHIVE"> <!-- NO VER LA WEB EN EL CACHE DE GOOGLE -->
<meta name="distribution" content="global"> <!-- A QUIEN Y QUIEN NO SE LE MOSTRARA EL CONTENIDO -->
<meta name="rating" content="general"> <!-- TIPO DE CONTENIDO PARA LO USUARIOS -->
<meta name="author" content="Ing. Jonathan Olier Miranda">
<meta name="copyright" content="&copy; 2012 Altivia Corp.">
<meta name="language" content="es">
<meta name="date" content="1994-11-06T08:49:37+00:00">
<meta name="revisit" content="15 days">
<meta name="revisit-after" content="15 days"> <!-- INDICA AL MOTOR DE BUSQUEDA CADA CUANTO DEBE REVISAR NUESTRO SITIO -->
<meta name="description" content="Articulos, tutoriales y noticias acerca de PHP, ActionScript, WordPress. " />
<meta name="keywords" content="wordpress, php, actionscript, google, adsense, flash, thickbox" />

<link rel="shortcut icon" href="../../theme/img/dde.ico" type="image/x-icon" />
<title>Not found on this server</title>
</head>
<body>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
	<div id="error" style="width:auto; height:auto;">
		<div style="float:left;">
			<img src="../../theme/img/elefantito-php.jpg" width="220" height="120" />
			<p>404. That's an error.</p>
			<p>The requested URL was not found on this server. That's all we know. </p>
		</div>
		<div style="float:inherit;">
			<img src="../../theme/img/reparacion.jpg" width="320" height="240"/>
		</div>
	</div>
</body>
</html>