<div id="miembros">
	<div class="section-separator"></div>
	<div class="titulo">Miembros</div>
	<hr>
	<div class="section-separator"></div>
	<?php
		if(isset($_REQUEST['user'])){

		}else{
			if(!isset($_SESSION['user_id'])){
				if(file_exists('interfaces/sidebar/vistas/sinup.php')){ include('interfaces/sidebar/vistas/sinup.php'); }
			}else{
				if(file_exists('interfaces/sidebar/vistas/sinout.php')){ include('interfaces/sidebar/vistas/sinout.php'); }
			}
		}
	?>
</div>