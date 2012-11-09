<?php
	session_start();
	if(isset($_SESSION['user_id'])){
		$sql='UPDATE `usuario` SET `online`= 0 WHERE `id` = '.$_SESSION['user_id'].' AND `estado` = 1 AND `online`= 1'; 
		include('../clases/sql.php');

		$sql='SELECT `auditoria`.`id` FROM `auditoria` WHERE `auditoria`.`id_usuario` = '.$_SESSION['user_id'].' AND `auditoria`.`entrada` LIKE "20'.date('y-m-d').' %" AND `salida` = "0000-00-00 00:00:00"';
		echo $sql;
		include('../clases/sql.php');
		if ($result > 0) {
            if ($row=mysql_fetch_array($result)) {
				$id=$row['id'];
            }
        }

        if (isset($id)) {
        	$sql='UPDATE `auditoria` SET `salida`="'.date('y-m-d h:m:s').'" WHERE `auditoria`.`id_usuario`='.$_SESSION['user_id'].' AND `auditoria`.`id`='.$id;
        	include('../clases/sql.php');
        }
		session_unset();
		session_destroy();
		header('location: ../site/');
	}
?>