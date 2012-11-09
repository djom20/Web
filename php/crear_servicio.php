<?php
	if(isset($_REQUEST['nombre'])){
		include('../clases/conexion.php');
		$sql='INSERT INTO `servicio`(`id_usuario`, `nombre`, `precio`) VALUES ('.$_REQUEST['conductor'].',"'.$_REQUEST['nombre'].'","'.$_REQUEST['precio'].'")';
		$result=mysql_query($sql,$link);
        $my_error = mysql_error($link);
        if(!empty($my_error)) { header('location ../error/error.php?error=$my_error()'); }

        $sql='SELECT @@identity AS id';
		$result=mysql_query($sql,$link);
        $my_error = mysql_error($link);
        if(!empty($my_error)) { header('location ../error/error.php?error=$my_error()'); }
        if ($row=mysql_fetch_array($result)) {
        	$sql='INSERT INTO `servicio_descripcion`(`id_servicio`, `cargamento`, `num_pasajeros`) VALUES ('.$row['id'].','.$_REQUEST['cargamento'].','.$_REQUEST['pasajeros'].')';
        	$result=mysql_query($sql,$link);
	        $my_error = mysql_error($link);
	        if(!empty($my_error)) { header('location ../error/error.php?error=$my_error()'); }
        }
	}
	//echo $sql;
	header('location: ../site/admin/');
?>