<?php
	if(isset($_REQUEST['id'])){
		include('../clases/conexion.php');
		$sql='SELECT `estado` FROM `usuario` WHERE `id`='.$_REQUEST['id'];
		$result=mysql_query($sql,$link);
        $my_error = mysql_error($link);
        if(!empty($my_error)) { header('location ../error/error.php.php?error=$my_error()'); }
        if ($result > 0) {
        	if ($row=mysql_fetch_array($result)) {
        		if($row['estado']==1){
        			$sql='UPDATE `usuario` SET `estado`=0 WHERE `id`='.$_REQUEST['id'];
        		}else if($row['estado']==0){
        			$sql='UPDATE `usuario` SET `estado`=1 WHERE `id`='.$_REQUEST['id'];
        		}
        		$result=mysql_query($sql,$link);
			    $my_error = mysql_error($link);
			    header('location: ../site/admin/');
        	}
        }
	}
?>