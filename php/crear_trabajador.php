<?php
	if(isset($_REQUEST['nombre'])){
		include('../clases/conexion.php');
		if ($_SESSION['id_tipo']==0) {
			$sql='INSERT INTO `usuario`(`id_tipo`,`nombre`, `nombre2`, `apellido`, `apellido2`, `email`, `celular`, `user`, `pass`, `trabajo`) VALUES (2,"'.$_REQUEST['nombre'].'","'.$_REQUEST['nombre2'].'","'.$_REQUEST['apellido'].'","'.$_REQUEST['apellido2'].'","'.$_REQUEST['email'].'","'.$_REQUEST['celular'].'","'.md5($_REQUEST['user']).'","'.md5($_REQUEST['pass']).'",'.$_REQUEST['trabajo'].')';
		}else{
			$sql='INSERT INTO `usuario`(`id_tipo`,`nombre`, `nombre2`, `apellido`, `apellido2`, `email`, `celular`, `user`, `pass`, `trabajo`) VALUES (2,"'.$_REQUEST['nombre'].'","'.$_REQUEST['nombre2'].'","'.$_REQUEST['apellido'].'","'.$_REQUEST['apellido2'].'","'.$_REQUEST['email'].'","'.$_REQUEST['celular'].'","'.md5($_REQUEST['user']).'","'.md5($_REQUEST['pass']).'",'.$_SESSION['id_empresa'].')';
		}
		$result=mysql_query($sql,$link);
        $my_error = mysql_error($link);
        if(!empty($my_error)) { header('location ../error/error.php?error=$my_error()'); }
	}
	//echo $sql;
	header('location: ../site/admin/');
?>