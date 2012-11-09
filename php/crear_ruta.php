<?php
	if(isset($_REQUEST['servicio'])){
		include('../clases/conexion.php');
		$sql='INSERT INTO `ruta`(`id_servicio`, `origen`, `destino`, `inicio`, `fin`) VALUES ('.$_REQUEST['servicio'].','.$_REQUEST['origen'].','.$_REQUEST['destino'].',"'.$_REQUEST['inicio'].'","'.$_REQUEST['fin'].'")';
		$result=mysql_query($sql,$link);
        $my_error = mysql_error($link);
        if(!empty($my_error)) { header('location ../error/error.php?error=$my_error()'); }
	}
	//echo $sql;
	header('location: ../site/admin/');
?>