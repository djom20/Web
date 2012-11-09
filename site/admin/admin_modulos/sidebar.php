<?php
	if (isset($_SESSION['user_id'])) {
		$sql='SELECT `usuario`.`email`,`usuario`.`celular`,`empresa`.`nombre` FROM `usuario`,`empresa` WHERE `usuario`.`estado`= 1 AND `usuario`.`online`= 1 AND `empresa`.`estado`=1 AND `usuario`.`id`='.$_SESSION['user_id'].' AND `empresa`.`id`='.$_SESSION['id_empresa'];
    	include('../../clases/sql.php');
    	if ($result > 0) {
	    	if ($row=mysql_fetch_array($result)) {
            	$email=$row['email'];
	            $cell=$row['celular'];
    	        $nom_emp=$row['nombre'];
	    	}
		}	
	}
?>
<aside id="sidebar" class="column">
	<h3>Admin</h3>
	<ul class="toggle">
		<?php if(isset($_SESSION['username'])){ echo '<li class="icn_settings"><a>'.$_SESSION['user'].'@'.$_SERVER["SERVER_NAME"].'</a></li>'; } ?>
		<?php if(isset($email)){ echo '<li class="icn_settings"><a>'.$email.'</a></li>'; } ?>
		<?php if(isset($cell)){ echo '<li class="icn_settings"><a>'.$cell.'</a></li>'; } ?>
		<?php if(isset($nom_emp)){ echo '<li class="icn_settings"><a>'.$nom_emp.'</a></li>'; } ?>
		<li class="icn_settings"><a href="../../php/logout.php">Logout</a></li>
	</ul>
	<h3>Contenido</h3>
	<ul class="toggle">
		<li class="icn_new_article"><a href="index.php">Inicio</a></li>
		<br/>
		<?php
			if ($_SESSION['id_tipo']==0) {
		?>
		<li class="icn_new_article">Administradores
			<ul>
				<li class="icn_view_users"><a href="nuevo.php?opcion=1">Agregar</a></li>
			</ul>
		</li>
		<?php
			}
			if ($_SESSION['id_tipo']==0 || $_SESSION['id_tipo']==1) {
		?>
		<li class="icn_new_article">Trabajadores
			<ul>
				<li class="icn_new_article"><a href="nuevo.php?opcion=2">Agregar</a></li>
			</ul>
		</li>
		<?php
			}
		?>
		<li class="icn_new_article">Conductores
			<ul>
				<li class="icn_view_users"><a href="nuevo.php?opcion=3">Agregar</a></li>
			</ul>
		</li>
		<li class="icn_new_article">Clientes
			<ul>
				<li class="icn_new_article"><a href="nuevo.php?opcion=4">Agregar</a></li>
			</ul>
		</li>
		<li class="icn_new_article">Rutas
			<ul>
				<li class="icn_view_users"><a href="nuevo.php?opcion=5">Agregar</a></li>
			</ul>
		</li>
		<li class="icn_new_article">Servicios
			<ul>
				<li class="icn_view_users"><a href="nuevo.php?opcion=6">Agregar</a></li>
			</ul>
		</li>
		<li class="icn_new_article">Vehiculos
			<ul>
				<li class="icn_view_users"><a href="nuevo.php?opcion=7">Agregar</a></li>
			</ul>
		</li>
		<li class="icn_new_article">Ciudades
			<ul>
				<li class="icn_view_users"><a href="nuevo.php?opcion=8">Agregar</a></li>
			</ul>
		</li>
		<?php
			if ($_SESSION['id_tipo']==0 || $_SESSION['id_tipo']==1) {
		?>
		<li class="icn_new_article">Empresas
			<ul>
				<li class="icn_view_users"><a href="nuevo.php?opcion=9">Agregar</a></li>
			</ul>
		</li>
		<?php
			}
		?>
	</ul>	
	<footer>
		<hr />
		<p><strong>Copyright &copy; 2012 Altivia</strong></p>
		<p>Theme by <a href="http://www.altiviaot.webcindario.com/home/site">Altivia</a></p>
	</footer>
</aside><!-- end of sidebar -->