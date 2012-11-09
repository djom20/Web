<?php
	if(isset($_REQUEST['placa'])){
		include('../clases/conexion.php');
		$sql='INSERT INTO `vehiculo`(`id_usuario`, `placa`) VALUES ('.$_REQUEST['conductor'].')';
		$result=mysql_query($sql,$link);
        $my_error = mysql_error($link);
        if(!empty($my_error)) { header('location ../error/error.php?error=$my_error()'); }
	}
	//echo $sql;
	header('location: ../site/admin/');
?>