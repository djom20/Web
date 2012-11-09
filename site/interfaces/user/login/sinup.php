<?php
	include('../../version.php');
	include('../../config/config.php');
	include('../../conex/conec.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<link rel="shortcut icon" href="../../img/ico/dde.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="../../theme/default/global.css">
<link rel="stylesheet" type="text/css" href="../../theme/default/menu.css">

<script type="text/javascript" src="theme/default/js/disable select text.js"></script>

<title>AltiviaOT</title>
</head>
<body oncopy="alert('Opción de copiado denegada por el administrador.');return false" oncontextmenu="alert('Botón derecho deshabilitado por el administrador.');return false">

<div class="section-separator"></div>
<div class="titulo" style="text-transform:uppercase !important;"><strong>Registro</strong></div>
<div class="section-separator"></div>
<div id="herramientas" style="text-align:right; color:#FFF; font-size:16px; background-image:url(../../theme/default/Silverlight.jpg)">&nbsp;</div>
<div id="cuerpo" style="text-align:justify; color:#000; font-size:16px;">
	<div id="form_user">
    <form id="1" name="registro" action="validate_sinup.php" enctype="multipart/form-data" method="post">
		<table width="400" border="0" align="center">
  			<tr>
    			<td>Nombre:</td>
    			<td><input name="nom" tabindex="1" type="text" maxlength="20"/></td>
  			</tr>
  			<tr>
    			<td>Apellido:</td>
    			<td><input name="ape" tabindex="2" type="text" maxlength="20"/></td>
  			</tr>
  			<tr>
    			<td>Fecha de nacimiento:</td>
    			<td><input name="fecha" value="1989-02-01" tabindex="3" type="text" maxlength="10"><img src="../../img/png/calendar.png" width="18" height="18"></td>
  			</tr>
   			<tr>
    			<td>Correo:</td>
    			<td><input name="correo" tabindex="4" type="text" maxlength="30"/></td>
  			</tr>
  			<tr>
    			<td>Nombre de usuario:</td>
    			<td><input name="user" tabindex="5" type="text" maxlength="10"/></td>
  			</tr>
  			<tr>
    			<td>Contraseña:</td>
    			<td><input name="pass2" tabindex="6" type="text" maxlength="50"/></td>
  			</tr>
  			<tr>
    			<td>Avatar:</td>
    			<td><input name="avatar" tabindex="7" type="file"/></td>
  			</tr>
            <tr>
    			<td>&nbsp;</td>
    			<td><input name="regis" tabindex="8" type="submit" value="Registrarse"/></td>
  			</tr>
		</table>
    </form>
	</div>
</div>
<div class="section-separator"></div>
<div id="data" style="text-align:left;">*Todos los campos son obligatorios.</div>
</div>

</body>
</html>