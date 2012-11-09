<?php
	if(isset($_REQUEST['nombre'])){
		include('../clases/conexion.php');
		if ($_SESSION['id_tipo']==0) {
			$sql='INSERT INTO `usuario`(`id_tipo`,`nombre`, `nombre2`, `apellido`, `apellido2`, `email`, `celular`, `user`, `pass`, `trabajo`) VALUES (3,"'.$_REQUEST['nombre'].'","'.$_REQUEST['nombre2'].'","'.$_REQUEST['apellido'].'","'.$_REQUEST['apellido2'].'","'.$_REQUEST['email'].'","'.$_REQUEST['celular'].'","'.md5($_REQUEST['user']).'","'.md5($_REQUEST['pass']).'",'.$_REQUEST['trabajo'].')';
		}elseif ($_SESSION['id_tipo']==0 || $_SESSION['id_tipo']==1) {
			$sql='INSERT INTO `usuario`(`id_tipo`,`nombre`, `nombre2`, `apellido`, `apellido2`, `email`, `celular`, `user`, `pass`, `trabajo`) VALUES (3,"'.$_REQUEST['nombre'].'","'.$_REQUEST['nombre2'].'","'.$_REQUEST['apellido'].'","'.$_REQUEST['apellido2'].'","'.$_REQUEST['email'].'","'.$_REQUEST['celular'].'","'.md5($_REQUEST['user']).'","'.md5($_REQUEST['pass']).'",'.$_SESSION['id_empresa'].')';
		}else {
			$sql='INSERT INTO `usuario`(`id_tipo`,`nombre`, `nombre2`, `apellido`, `apellido2`, `email`, `celular`, `user`, `pass`, `trabajo`) VALUES (3,"'.$_REQUEST['nombre'].'","'.$_REQUEST['nombre2'].'","'.$_REQUEST['apellido'].'","'.$_REQUEST['apellido2'].'","'.$_REQUEST['email'].'","'.$_REQUEST['celular'].'","'.md5($_REQUEST['user']).'","'.md5($_REQUEST['pass']).'",1)';
		}
		include('../clases/sql.php');
	}
	header('location: ../site/admin/');
?>