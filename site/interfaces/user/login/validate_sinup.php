<?php
if ($_REQUEST['regis'] == "Registrarse" ){
	if(isset($_REQUEST['nom'])==1){ echo $_REQUEST['nom']."<br />"; }
	if(isset($_REQUEST['ape'])==1){ echo $_REQUEST['ape']."<br />"; }
	if(isset($_REQUEST['fecha'])==1){ echo $_REQUEST['fecha']."<br />"; }
	if(isset($_REQUEST['correo'])==1){ echo $_REQUEST['correo']."<br />"; }
	if(isset($_REQUEST['user'])==1){ echo $_REQUEST['user']."<br />"; }
	if(isset($_REQUEST['pass2'])==1){ echo $_REQUEST['pass2']."<br />"; }
	if(isset($_REQUEST['avatar'])==1){ echo $_REQUEST['avatar']."<br />"; }
	
	$sql='INSERT INTO `altiviaot_usuarios`(`nombre`, `apellido`, `fecha_nacimiento`, `nom_usuario`, `email`, `password`, `password_b`, `regitrado`, `activacion`, `img_url`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10])';

}
?>