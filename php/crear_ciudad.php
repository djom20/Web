<?php
	if(isset($_REQUEST['nombre'])){
		include('../clases/conexion.php');
		$sql='INSERT INTO `ciudad`(`nombre`) VALUES ("'.$_REQUEST['nombre'].'")';
		$result=mysql_query($sql,$link);
        $my_error = mysql_error($link);
        if(!empty($my_error)) { header('location ../error/error.php?error=$my_error()'); }
	}
	header('location: ../site/admin/');
?>