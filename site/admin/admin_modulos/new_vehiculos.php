<?php
	if (isset($_REQUEST['edit'])) {
		$sql='SELECT `vehiculo`.`placa` FROM `vehiculo` WHERE `vehiculo`.`estado`=1 AND `vehiculo`.`id`='.$_REQUEST['edit'];
		include('../../clases/sql.php');
	    if ($result > 0) {
	        if ($row=mysql_fetch_array($result)) {
	            $placa=$row['placa'];
	        }
	    }
	}
?>
<article class="module width_3_quarter">
	<form id="form_articulo" name="articulo" <?php if (isset($_REQUEST['edit'])){ echo 'action="../../php/actualizar_vehiculos.php"'; }else{ echo 'action="../../php/crear_vehiculos.php"'; } ?> method="POST">
		<header><h3>Nuevo Vehiculo</h3></header>
			<div class="module_content">
				<fieldset>
					<label>(*) Conductor:</label>
					<select name="conductor">
					<?php
						if ($_SESSION['id_tipo']==0) {
							$sql='SELECT `usuario`.`id`, CONCAT(`usuario`.`nombre`," ",`usuario`.`apellido`) as nombre FROM `usuario` WHERE `usuario`.`estado`=1 AND `usuario`.`id_tipo`=4';
						}else{
							$sql='SELECT `usuario`.`id`, CONCAT(`usuario`.`nombre`," ",`usuario`.`apellido`) as nombre FROM `usuario` WHERE `usuario`.`estado`=1 AND `usuario`.`id_tipo`=4 AND `usuario`.`trabajo`='.$_SESSION['id_empresa'];
						}
			            include('../clases/sql.php');
			            if ($result > 0) {
			                while ($row=mysql_fetch_array($result)) {
			                    echo '<option value="'.$row['id'].'">'.$row['nombre'].'</option>';
			                }
			            }
					?>
					</select>
				</fieldset>
				<fieldset>
					<label>(*) Placa:</label>
					<input value="<?php if (isset($placa)) { echo $placa; } ?>" type="text" name="placa">
				</fieldset>
				<div class="clear"></div>
			</div>
		<footer>
			<div class="submit_link">
				<input type="submit" value="Publicar">
			</div>
		</footer>
	</form>
</article><!-- end of post new article -->