<?php
	if (isset($_REQUEST['edit'])) {
		$sql='SELECT  `empresa`.`nombre` FROM `empresa` WHERE  `empresa`.`estado`=1 AND  `empresa`.`id`='.$_REQUEST['edit'];
		include('../../clases/sql.php');
	    if ($result > 0) {
	        if ($row=mysql_fetch_array($result)) {
	            $nombre=$row['nombre'];
	        }
	    }
	}
?>
<article class="module width_3_quarter">
	<form id="form_articulo" name="articulo" <?php if (isset($_REQUEST['edit'])){ echo 'action="../../php/actualizar_empresa.php"'; }else{ echo 'action="../../php/crear_empresa.php"'; } ?> method="POST">
		<header><h3>Nueva Empresa</h3></header>
			<div class="module_content">
				<fieldset>
					<label>(*) Nombre:</label>
					<input value="<?php if (isset($nombre)) { echo $nombre; } ?>" type="text" name="nombre">
				</fieldset>
				<fieldset>
					<label>(*) Sede:</label>
					<select name="sede">
					<?php
						$sql='SELECT `ciudad`.`id`, `ciudad`.`nombre` FROM `ciudad` WHERE  `ciudad`.`estado`=1';
			            include('../../clases/sql.php');
			            if ($result > 0) {
			                while ($row=mysql_fetch_array($result)) {
			                    echo '<option value="'.$row['id'].'">'.$row['nombre'].'</option>';
			                }
			            }
					?>
					</select>
				</fieldset>
				<?php
					if ($_SESSION['id_tipo']==0) {
				?>
				<fieldset>
					<label>(*) Administrador:</label>
					<select name="admin">
					<?php
						$sql='SELECT `usuario`.`id`, CONCAT(`usuario`.`nombre`," ",`usuario`.`apellido`) as nombre FROM `usuario` WHERE `usuario`.`estado`=1 AND `usuario`.`id_tipo`=1';
			            include('../../clases/sql.php');
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
				<div class="clear"></div>
			</div>
		<footer>
			<div class="submit_link">				
				<input type="submit" value="Publicar">
			</div>
		</footer>
	</form>
</article><!-- end of post new article -->