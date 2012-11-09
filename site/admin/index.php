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
		<link type="text/css" href="../../themes/admin/css/jquery-ui-1.8.13.custom.css" rel="stylesheet" />
		<!--[if lt IE 9]>
			<link rel="stylesheet" href="../../themes/admin/ie.css" type="text/css" media="screen" />
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<script src="../../themes/admin/js/jquery-1.5.2.min.js" type="text/javascript"></script>
		<script src="../../themes/admin/js/hideshow.js" type="text/javascript"></script>
		<script src="../../themes/admin/js/jquery.tablesorter.min.js" type="text/javascript"></script>
		<script type="text/javascript" src="../../themes/admin/js/jquery.equalHeight.js"></script>
		<script type="text/javascript" src="../../themes/admin/js/jquery-ui-1.8.13.custom.min.js"></script>
		<script type="text/javascript" src="../../themes/admin/js/jquery-ui-timepicker-addon.js"></script>
		<script type="text/javascript" src="../../themes/admin/js/jjquery-1.5.1.min.js"></script>
		<script type="text/javascript" src="../../themes/admin/js/jquery.validate.js"></script>

		<!-- Validadores de formularios -->
		<script type="text/javascript" src="../../themes/admin/js/administrador.js"></script>
		<script type="text/javascript" src="../../themes/admin/js/ciudad.js"></script>
		<script type="text/javascript" src="../../themes/admin/js/cliente.js"></script>
		<script type="text/javascript" src="../../themes/admin/js/conductor.js"></script>
		<script type="text/javascript" src="../../themes/admin/js/empresa.js"></script>
		<script type="text/javascript" src="../../themes/admin/js/ruta.js"></script>
		<script type="text/javascript" src="../../themes/admin/js/servicio.js"></script>
		<script type="text/javascript" src="../../themes/admin/js/trabajador.js"></script>
		<script type="text/javascript" src="../../themes/admin/js/vehiculos.js"></script>

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
		    $('.fehca').datetimepicker({
				showSecond: true,
				timeFormat: 'hh:mm:ss',
				minDate: new Date(2010, 11, 20, 8, 30),
				maxDate: new Date(2010, 11, 31, 17, 30)
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
			<?php if(file_exists('admin_modulos/contenido.php')){ include('admin_modulos/contenido.php'); } ?>
			<div class="spacer"></div>
		</section>
	</body>
</html>