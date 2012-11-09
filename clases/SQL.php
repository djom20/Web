<?php
	include('conexion.php');
	$result=mysql_query($sql,$link);
		
	$my_error = mysql_error($link);
	if(!empty($my_error)) {	header('location: ../error/error.php?error='.$my_error()); }
?>