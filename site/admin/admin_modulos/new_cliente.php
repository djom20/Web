<?php
	if (isset($_REQUEST['edit'])) {
		$sql='SELECT `usuario`.`nombre`, `usuario`.`apellido`,`usuario`.`nombre2`,`usuario`.`apellido2`,`usuario`.`email`,`usuario`.`celular`,`usuario`.`trabajo` FROM `usuario` WHERE `usuario`.`estado`=1 AND `usuario`.`id_tipo`= 3 AND `usuario`.`id`='.$_REQUEST['edit'];
		include('../clases/sql.php');
	    if ($result > 0) {
	        if ($row=mysql_fetch_array($result)) {
	            $nombre=$row['nombre'];
	            $nombre2=$row['nombre2'];
	            $apellido=$row['apellido'];
	            $apellido2=$row['apellido2'];
	            $email=$row['email'];
	            $celular=$row['celular'];
	            $trabajo=$row['trabajo'];
	        }
	    }
	}
?>
<article class="module width_3_quarter">
	<form id="form_articulo" name="articulo" <?php if (isset($_REQUEST['edit'])){ echo 'action="../../php/actualizar_cliente.php"'; }else{ echo 'action="../../php/crear_cliente.php"'; } ?> method="POST">
		<header><h3>Nuevo Cliente</h3></header>
			<div class="module_content">
			<fieldset>
				<label>(*) Nombre:</label>
				<input value="<?php if (isset($nombre)) { echo $nombre; } ?>" id="admin_nom" type="text" name="nombre" maxlength="15">
			</fieldset>
			<fieldset>
				<label>2Nombre:</label>
				<input value="<?php if (isset($row['nombre2'])) { echo $row['nombre2']; } ?>" type="text" name="nombre2" maxlength="15">
			</fieldset>
			<fieldset>
				<label>(*) Apellido:</label>
				<input value="<?php if (isset($row['apellido'])) { echo $row['apellido']; } ?>" id="admin_ape" type="text" name="apellido" maxlength="15">
			</fieldset>
			<fieldset>
				<label>2Apellido:</label>
				<input value="<?php if (isset($row['apellido2'])) { echo $row['apellido2']; } ?>" type="text" name="apellido2" maxlength="15">
			</fieldset>
			<fieldset>
				<label>(*) Email:</label>
				<input value="<?php if (isset($row['email'])) { echo $row['email']; } ?>" id="admin_mail" type="text" name="email" maxlength="50">
			</fieldset>
			<fieldset>
				<label>(*) Celular:</label>
				<input value="<?php if (isset($row['celular'])) { echo $row['celular']; } ?>" id="admin_cel" type="text" name="celular" maxlength="10">
			</fieldset>
			<fieldset>
				<label>(*) Usuario:</label>
				<input id="admin_user" type="text" name="user" maxlength="6">
			</fieldset>
			<fieldset>
				<label>(*) Password:</label>
				<input id="admin_pass" type="password" name="pass" maxlength="15">
			</fieldset>
			<?php
				if ($_SESSION['id_tipo']==0) {
			?>
			<fieldset>
				<label>(*) Empresa:</label>
				<select name="trabajo">
					<?php
						$sql='SELECT DISTINCT `empresa`.`id`,`empresa`.`nombre` FROM `empresa` WHERE `empresa`.`estado`=1';
			            include('../clases/sql.php');
			            if ($result > 0) {
			                while ($row=mysql_fetch_array($result)) {
			                    echo '<option value="'.$row['id'].'">'.$row['nombre'].'</option>';
			                }
			            }
					?>
				</select>
			</fieldset>
			<?php
				}
			?>
		</div>
		<footer>
			<div class="submit_link">
				<input id="bttadmin" type="submit" value="Publicar">
			</div>
		</footer>
	</form>
</article><!-- end of post new article -->