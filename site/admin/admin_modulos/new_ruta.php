<?php
	if (isset($_REQUEST['edit'])) {
		$sql='SELECT `ruta`.`fin`, `ruta`.`inicio` FROM `ruta` WHERE `ruta`.`estado` = 1 AND `ruta`.`id`='.$_REQUEST['edit'];
		include('../../clases/sql.php');
	    if ($result > 0) {
	        if ($row=mysql_fetch_array($result)) {
	            $inicio=$row['inicio'];
	            $fin=$row['fin'];
	        }
	    }
	}
?>
<article class="module width_3_quarter">
	<form id="form_articulo" name="articulo" <?php if (isset($_REQUEST['edit'])){ echo 'action="../../php/actualizar_ruta.php"'; }else{ echo 'action="../../php/crear_ruta.php"'; } ?> method="POST">
		<header><h3>Nueva Ruta</h3></header>
			<div class="module_content">
				<fieldset>
					<label>(*) Servicio:</label>
					<select name="servicio">
					<?php
						$sql='SELECT `servicio`.`id`,`servicio`.`nombre` FROM `servicio` WHERE `servicio`.`estado`=1';
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
					<label>(*) Origen:</label>
					<select name="origen">
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
				<fieldset>
					<label>(*) Destino:</label>
					<select name="destino">
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
				<fieldset>
					<label>(*) Inicio:</label>
					<input type="text" name="inicio" class="fecha" value="<?php if (isset($inicio)) { echo $inicio; }else{ echo date("y-m-d h:m:s"); } ?>" />
				</fieldset>
				<fieldset>
					<label>(*) Fin:</label>
					<input type="text" name="fin" class="fecha" value="<?php if (isset($fin)) { echo $fin; }else{ echo date("y-m-d h:m:s"); } ?>" />
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