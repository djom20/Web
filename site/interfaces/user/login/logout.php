<?php
	session_unset(); /*borra todas las variables que esten dentro de la secion anterior*/
	session_destroy(); /*cierra la seccion en caso de estar abierta*/
	header("location:  ../index.php");
?>