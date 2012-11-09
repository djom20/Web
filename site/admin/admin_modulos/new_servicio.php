<?php
	if (isset($_REQUEST['edit'])) {
		$sql='SELECT `servicio`.`nombre`,`servicio`.`precio` FROM `servicio` WHERE `servicio`.`estado`=1 AND `servicio`.`id`='.$_REQUEST['edit'];
		include('../../clases/sql.php');
	    if ($result > 0) {
	        if ($row=mysql_fetch_array($result)) {
	            $nombre=$row['nombre'];
	            $precio=$row['precio'];
	        }
	    }
	}
?>
<article class="module width_3_quarter">
	<form id="form_articulo" name="articulo" <?php if (isset($_REQUEST['edit'])){ echo 'action="../../php/actualizar_servicio.php"'; }else{ echo 'action="../../php/crear_servicio.php"'; } ?> method="POST">
		<header><h3>Nuevo Servicio</h3></header>
			<div class="module_content">
				<fieldset>
					<label>(*) Conductor:</label>
					<select name="conductor">
					<?php
						$sql='SELECT `usuario`.`id`, CONCAT(`usuario`.`nombre`," ",`usuario`.`apellido`) as nombre FROM `usuario` WHERE `usuario`.`estado`=1 AND `usuario`.`id_tipo`=4';
			            include('../../clases/sql.php');
			            if ($result > 0) {
			                while ($row=mysql_fetch_array($result)) {
			                    echo '<option value="'.$row['id'].'">'.$row['nombre'].'</option>';
			                }
			            }
					?>
					</select>
				</fieldset>
				<fieldset>
					<label>(*) Nombre:</label>
					<input value="<?php if (isset($nombre)) { echo $nombre; } ?>" type="text" name="nombre">
				</fieldset>
				<fieldset>
					<label>(*) Precio:</label>
					<input value="<?php if (isset($precio)) { echo $precio; } ?>" type="text" name="precio">
				</fieldset>
				<fieldset>
					<label>(*) Pasajeros:</label>
					<select name="pasajeros">
					<?php
						for($i=1; $i<=10; $i++){ echo '<option value="'.$i.'">'.$i.'</option>'; }
					?>
					</select>
				</fieldset>
				<fieldset>
					<label>(*) Cargamento ó maletas:</label>
					<select name="cargamento">
					<?php
						for($i=1; $i<=5; $i++){ echo '<option value="'.$i.'">'.$i.'</option>'; }
					?>
					</select>
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