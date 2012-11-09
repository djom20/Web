<?php
    session_start();
    include_once('../../clases/conexion.php');
?>
<!doctype html>
<html lang="es">
	<head>
		<title>Altivia | Admin Panel</title>
	    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	    <link rel="icon" href="../../themes/favicon.ico" type="image/x-icon" />
	    <link rel="shortcut icon" href="../../themes/favicon.ico" type="image/x-icon" />
	    <meta name="robots" content="noindex,nofollow" />	
		<link rel="stylesheet" href="../../themes/admin/css/layout.css" type="text/css" media="screen" />
		<!--[if lt IE 9]>
			<link rel="stylesheet" href="../../themes/admin/ie.css" type="text/css" media="screen" />
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<script src="../../themes/admin/js/jquery-1.5.2.min.js" type="text/javascript"></script>
		<script src="../../themes/admin/js/hideshow.js" type="text/javascript"></script>
		<script src="../../themes/admin/js/jquery.tablesorter.min.js" type="text/javascript"></script>
		<script type="text/javascript" src="../../themes/admin/js/jquery.equalHeight.js"></script>
		<script type="text/javascript">
			$(document).ready(function() { $(".tablesorter").tablesorter(); } );
			$(document).ready(function() {
				//When page loads...
				$(".tab_content").hide(); //Hide all content
				$("ul.tabs li:first").addClass("active").show(); //Activate first tab
				$(".tab_content:first").show(); //Show first tab content
				//On Click Event
				$("ul.tabs li").click(function() {
					$("ul.tabs li").removeClass("active"); //Remove any "active" class
					$(this).addClass("active"); //Add "active" class to selected tab
					$(".tab_content").hide(); //Hide all tab content
					var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
					$(activeTab).fadeIn(); //Fade in the active ID content
					return false;
				});
			});
	    </script>
	    <script type="text/javascript">
		    $(function(){ $('.column').equalHeight(); });
		</script>
	</head>
	<body>
		<header id="header">
			<h1 class="site_title"><a href="index.html"><?php if(isset($_SESSION['nom_tipo'])){ echo $_SESSION['nom_tipo']; }else{ echo 'error'; } ?></a></h1>
		</header> <!-- end of header bar -->
		<?php if(file_exists('admin_modulos/sidebar2.php')){ include('admin_modulos/sidebar2.php'); } ?>
		<?php if(file_exists('admin_modulos/sidebar.php')){ include('admin_modulos/sidebar.php'); } ?>
		<section id="main" class="column">	
			<?php
				if(isset($_REQUEST['opcion'])){
					switch ($_REQUEST['opcion']) {
						case 1:
							if(file_exists('admin_modulos/new_administrador.php')){ include('admin_modulos/new_administrador.php'); }
							break;
						case 2:
							if(file_exists('admin_modulos/new_trabajador.php')){ include('admin_modulos/new_trabajador.php'); }
							break;
						case 3:
							if(file_exists('admin_modulos/new_conductor.php')){ include('admin_modulos/new_conductor.php'); }
							break;
						case 4:
							if(file_exists('admin_modulos/new_cliente.php')){ include('admin_modulos/new_cliente.php'); }
							break;
						case 5:
							if(file_exists('admin_modulos/new_ruta.php')){ include('admin_modulos/new_ruta.php'); }
							break;
						case 6:
							if(file_exists('admin_modulos/new_servicio.php')){ include('admin_modulos/new_servicio.php'); }
							break;
						case 7:
							if(file_exists('admin_modulos/new_vehiculos.php')){ include('admin_modulos/new_vehiculos.php'); }
							break;
						case 8:
							if(file_exists('admin_modulos/new_ciudad.php')){ include('admin_modulos/new_ciudad.php'); }
							break;
						case 9:
							if(file_exists('admin_modulos/new_empresa.php')){ include('admin_modulos/new_empresa.php'); }
							break;
					}
				}
				if(isset($_REQUEST['ok'])) { echo '<div>Articulo Agregado correctamente.</div>'; }
			?>
			<div class="clear"></div>
			<div class="spacer"></div>
		</section>
	</body>
</html>