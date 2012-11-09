<?php
	if(isset($_REQUEST['user'])==1 && isset($_REQUEST['pass'])==1){
		$sql='SELECT `usuario`.`id`, `usuario_tipo`.`id` as id_tipo,`usuario`.`trabajo` as id_empresa,`usuario_tipo`.`nombre` as nom_tipo, CONCAT( `usuario`.`nombre`," ", `usuario`.`apellido`) AS nombre FROM `usuario`, `usuario_tipo` WHERE `usuario`.`user`="'.md5($_REQUEST['user']).'" AND  `usuario`.`pass`="'.md5($_REQUEST['pass']).'" AND `usuario`.`online`= 0 AND `usuario`.`estado` = 1 AND `usuario`.`id_tipo` = `usuario_tipo`.`id`'; 
		include('../clases/sql.php');

		if ($result > 0) {
			if ($row=mysql_fetch_array($result)) {
				session_start();
				/*
					$_SERVER["SERVER_NAME"];
					$_SERVER["HTTP_HOST"];
					$_SERVER["SERVER_PORT"];
					$_SERVER["REQUEST_URI"];
				*/
				$_SESSION['username']=$row['nombre'];
				$_SESSION['user']=$_REQUEST['user'];
				$_SESSION['pass']=md5($_REQUEST['pass']);
				$_SESSION['user_id']=$row['id'];
				$_SESSION['id_tipo']=$row['id_tipo'];
				$_SESSION['nom_tipo']=$row['nom_tipo'];
				$_SESSION['id_empresa']=$row['id_empresa'];
				
				switch ($row['id_tipo']) {
					case 0: webmaster(); break;
					case 1: administrador(); break;
					case 2: usuario(); break;
					case 3: cliente(); break;
					case 4: conductor(); break;
				}
			}else{
				$er='Este usuario ya esta en uso ó no esta activo, por favor comuniquese con el administrador.';
				header('location: ../error/error.php?error='.$er);
			}
		}
	}else{ 
		$er='El usuario ó password suministrado son incorrectos.';
		header('location: ../error/error.php?error='.$er);
	}

	function online(){
		$sql='UPDATE `usuario` SET `usuario`.`online`= 1 WHERE `usuario`.`id` = '.$_SESSION['user_id'].' AND `usuario`.`estado` = 1 AND `usuario`.`online`= 0'; 
		include('../clases/sql.php');

		$sql='INSERT INTO `auditoria` (`auditoria`.`id_usuario`) VALUES ('.$_SESSION['user_id'].')'; 
		include('../clases/sql.php');
	} 

	function conductor(){ online(); header('location: ../site/admin/'); }
	function cliente(){ online(); header('location: ../site/'); }
	function usuario(){ online(); header('location: ../site/admin/'); }
	function administrador(){ online(); header('location: ../site/admin/'); }
	function webmaster(){ online(); header('location: ../site/admin/'); } 
?>