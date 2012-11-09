<?php
	if(isset($_REQUEST['id'])){
		include('../clases/conexion.php');
		$sql='DELETE FROM `ruta` WHERE `id`='.$_REQUEST['id'];
		$result=mysql_query($sql,$link);
        $my_error = mysql_error($link);
        if(!empty($my_error)) { header('location ../error/error.php.php?error=$my_error()'); }
        header('location: ../site/admin/');
?>