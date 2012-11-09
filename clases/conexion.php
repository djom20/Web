<?php
	$link = mysql_connect("127.0.0.1","root","");
	if(!$link){ 
		header('location ../error/error.php.php?error=$my_error()');
	} 
	mysql_select_db("ingweb",$link);
?>