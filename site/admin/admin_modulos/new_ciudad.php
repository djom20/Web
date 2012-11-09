<?php
	if (isset($_REQUEST['edit'])) {
		$sql='SELECT `ciudad`.`nombre` FROM `ciudad` WHERE `ciudad`.`estado`= 1 AND `ciudad`.`id`='.$_REQUEST['edit'];
		include('../../clases/sql.php');
	    if ($result > 0) {
	        if ($row=mysql_fetch_array($result)) {
	            $nombre=$row['nombre'];
	        }
	    }
	}
?>
<article class="module width_3_quarter">
	<form id="form_articulo" name="articulo" <?php if (isset($_REQUEST['edit'])){ echo 'action="../../php/actualizar_ciudad.php"'; }else{ echo 'action="../../php/crear_ciudad.php"'; } ?> method="POST">
		<header><h3>Nueva Ciudad</h3></header>
			<div class="module_content">
				<fieldset>
					<label>(*) Nombre:</label>
					<input value="<?php if (isset($nombre)) { echo $nombre; } ?>" type="text" name="nombre">
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