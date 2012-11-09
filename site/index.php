<?php
	session_start();

	ob_start('ob_gzhandler' );
	header('Vary: Accept-Encoding');
	$cache_expire = 60*60*24*365;
	header("Pragma: public");
	header("Cache-Control: max-age=".$cache_expire);
	header('Expires: '.gmdate('D, d M Y H:i:s', time()+$cache_expire).' GMT');
	$url='http://localhost:8082/webfinal/site/index.php';
	$preload='../themes/cliente/img/progress.gif';
	if(isset($_REQUEST['style'])==1){ $style=$_REQUEST['style']; }
	if(isset($_SESSION['user_id'])==1){ 
	?>
		<script type="text/javascript">
			alert('bienvenido <?php echo $_SESSION['username']; ?>');
		</script>
	<?php
	}
?>
<!DOCTYPE html>
<html lang="es">
	<head>
	<?php if(file_exists('interfaces/metadatos/metadatos.php')){ include('interfaces/metadatos/metadatos.php'); } ?>
	<?php
		if(file_exists('interfaces/metadatos/link_rel.php')){ include('interfaces/metadatos/link_rel.php'); }
	?>
	<title>AltiviaOT - Home</title>
	</head>
	<body>
		<?php if(file_exists('interfaces/header.php')){ include('interfaces/header.php'); }  ?>
		<nav>
			<?php if(file_exists('interfaces/menu.php')){ include('interfaces/menu.php'); }  ?>
		</nav>
		<div class="section-separator"></div>
		<div class="container">
			<?php if(file_exists('interfaces/contenido.php')){ include('interfaces/contenido.php'); }  ?>
			<?php if(file_exists('interfaces/sidebar.php')){ include('interfaces/sidebar.php'); }  ?>
			<div class="section-separator"></div>
			<?php if(file_exists('interfaces/noticias.php')){ include('interfaces/noticias.php'); }  ?>
		</div><!-- end .container -->
		<?php if(file_exists('interfaces/footer.php')){ include('interfaces/footer.php'); }  ?>
		<?php if(file_exists('interfaces/metadatos/lib_javascripts.php')){ include('interfaces/metadatos/lib_javascripts.php'); } ?>
	</body>
</html>