<?php
header("Content-type: text/css; charset: UTF-8");

if(isset($_REQUEST['style'])==1){ $i=$_REQUEST['style']; }else { $i=4; }
switch($i){
	case 1: /* STYLE SIN IMAGENES */
		$body='../img/default/body.jpg';
		$texto='../img/papel.jpg';
		break;
	case 2: /* IMAGEN STYLES */
		$album='../img/default/album_bkgd_flat.jpg';
		$body='../img/default/body.jpg';
		$div_head='../img/default/sidebar.jpg';
		$div_cabecera='../img/default/sidebar.jpg';
		$div_conten='../img/default/sidebar.jpg';
		$div_footer='../img/default/bgfooter.png';
		$herramientas='../img/default/header2.jpg';
		$loading='../img/progress.gif';
		$texto='../img/papel.jpg';
		$sidebar='../img/default/header.jpg';
		break;
	case 3: /* PUNK STYLE */
		$album='../img/album_bkgd_flat.jpg';
		$body='../img/punk/bG6.jpg';
		$div_head='../img/punk/8zM.jpg';
		$div_cabecera='../img/punk/8H0.jpg';
		$div_conten='../img/punk/Kx0.jpg';
		$herramientas='../img/punk/AT4.jpg';
		$div_footer='../img/punk/WLp.jpg';
		$loading='../img/progress.gif';
		$texto='../img/papel.jpg';
		$sidebar='../img/default/header.jpg';
		break;
	case 4:
		$body='../img/default/body2.png';
		$texto='../img/papel.jpg';
		$album='../img/album_bkgd_flat.jpg';
		break;
}
?>
/*---------------------- ETIQUETAS ----------------------*/

a img{ border: none; }
a:active, a:focus, a:hover{ color:#FFF; text-decoration: none; }
a:link { color:#FFF; text-decoration: none; }
a:visited { color:#FFF; text-decoration: underline; }
body{ <?php if(isset($body)==1 && $i != 4){echo 'background: url("'.$body.'") no-repeat center center fixed;';  /* background-size: cover; */ }else if(isset($body)==1 && $i == 4){echo 'background: url("'.$body.'") top left;'; } ?> <?php if($i==3){ echo 'background-color: #000;'; }else if ($i==1 || $i==4){ echo 'background-color: #6495ed;'; } ?> color:white; display:none; font-family: "Kaushan de secuencias de comandos", cursiva ; fon-size: 16px; margin: 0; padding: 0; behavior: url('../js/ie/PIE.htc'); }
h1, h2, h3, h4, h5, h6, p{ margin: 0; padding: 0px 5px; text-aling: center; }
h1{ text-shadow: 5px 2px 20px rgba(255,165,0,255.8); } /*orange*/
input.gsc-input { border-color: #000000; }
input.gsc-search-button { border-color: #000000; background-color: #ffffff; }
input[type="submit"]:hover { background-size: 100% 100%; background: -moz-linear-gradient(top, #CCC, #DDD); background: -o-linear-gradient(top, #CCC, #DDD); background: -o-linear-gradient(top, #CCC, #DDD); background: -webkit-gradient(linear, left top, left bottom, from(#CCC), to(#DDD)); cursor: pointer; position: relative; } 
input[type="submit"] { -moz-border-radius: 12px; -webkit-border-radius: 12px; background-image: url(svg_gradient.svg); background-size: 100% 100%; background: #DDD; background: -moz-linear-gradient(top, white, #CCC); background: -o-linear-gradient(top, white, #CCC); background: -webkit-gradient(linear, left top, left bottom, from(white), to(#CCC)); border-radius: 12px; border: 1px solid #AAA; color: #111; font-size: 1em; font-size: 82%; font-weight: bold; margin-left: 14px; padding: 3px 7px; text-decoration: none; text-shadow: 0px 1px 0px white; }
li{ list-style-type: none; }
ul{ margin: 0; padding: 0; }


/*---------------------- ID ----------------------*/

#album2{ border-color: #fff589; border-style: outset; border-width: 6px; }
#autor_descripcion{ clear: inherit; color: #09F; float: inherit; }
#autor_nombre{ clear: inherit; color: #CFF; float: inherit; }
#banderas{ height:50px; margin-left:25px; width:180px; }
#blogs,#encuesta,#idiomas,#miembros,#perfil,#redes_sociales,#user,#visitas{ color:#FFF; }
#colum_der, #colum_izq { padding: 10px; float:left; display: table-cell; }
#contacto input[type='text'], #contacto textarea{ border: 1px solid #CED5D7; box-shadow:0 0 0 3px #EEF5F7; resize: none; }
#contacto input[type='text']:focus, #contacto textarea:focus{ box-shadow:0 0 0 3px #dde9ec; outline: none; }
#cuerpo_contenido{ color:#FFF; font: message-box; font-size:16px; max-wigth: 20px; text-align:justify; width: 540px; }
#curve{ }
#descripcion{ float: left; margin: 5px; text-align:justify; width: 515px; }
#facebook{ float:left; }
#fecha{ float: left; margin-top:15px; }
#foto{ float: left; margin: 5px; margin-bottom: 12px; margin-right: 0px; }
#idiomas{ float:inherit; }
#imagen_autor{ clear: both; float: left; margin:10px; padding:10px; }
#informacion{ clear: right; float: inherit; }
#inicio_session{ border-style: solid; border-width: 1px; }
#insert_logo{ display:block; padding: 5px 20px 20px 20px; }
#listado_articulos{ <?php if(isset($herramientas)==1){ echo 'background: url("'.$herramientas.'");'; } ?> color:#FFF; font-size:16px; height:19px; text-align:left !important; }
#logo img{ float:left; height:70px; padding:5px; width:70px; }
#logo_titulo{ }
#mostar{ }
#musica_fondo{  }
#noticias{ height: 250px; height: auto; }
#session{ text-align:center; }
#redes_sociales{ float: left; max-width:130px; padding-left: 15px; padding-top: 5px; position: fixed; }
#rss{ float:inherit; }
#table_perfil{ width: 207px; }
#texto{ <?php if(isset($texto)==1){ echo 'background: url("'.$texto.'") top left repeat-y;'; } ?> color:#000; height: 240px; padding:10px 5px 10px 25px; width: 400px; }
#titter{ float:inherit; }
#user_info{ width: 140px; }
#video{ float: left; padding:5px 5px 0px 10px; }
#youtube{ float:left; }


/*---------------------- CLASES ----------------------*/

.articulo{ font-size:12px; float:left; margin-left:20px; margin-bottom:10px; padding:5px; width:680px; }
.autor{ float: left; clear: inherit; }
.bandera{ float:left; }
.bordes{ border-style: outset; border-width: 6px; }
.cabecera{ <?php if(isset($div_cabecera)==1){ echo 'background: url("'.$div_cabecera.'");';  } ?> color:#09F; height: 23px; }
.clearLeft{ clear:left; }
.clearRight{ clear:right; }
.clear{ clear:both; }
.comentario{ color: orange; font-weight:bold; font-size:16px; margin: 0px; }
.container{ margin: 0 auto; width: 960px; }
.contenido{ color:#000 !important; }
.content{ color:#FFF; float:left; height:750px; padding:10px 0; text-align:center; width:730px; }
.conten{ <?php if(isset($div_conten)==1){ echo 'background: url("'.$div_conten.'");'; } ?> }
.error_form:before{ content: ''; border-bottom: 8px solid transparent; border-left: 8px solid transparent; border-right: 8px solid #BC1010; border-top: 8px solid transparent; left: -16px; position: absolute; top: 5px; }
.error_form{ background-color: #BC1010; border-radius: 4px; color: white; font-weight: bold; margin-left: 16px; margin-top: 6px; padding: 6px 12px; position: absolute; } 
.espacio{ clear:both; }
.foter{ <?php if(isset($div_footer)==1){ echo 'background: url("'.$div_footer.'") no-repeat left;';  } ?> height:11px; text-align:center; <?php if($i != 3){ echo 'border-radius:0px 0px 10px 10px;'; } ?> }
.google_translate img { border:0; filter:alpha(opacity=100); opacity: 1.0; }
.google_translate:hover img { border:0; filter:alpha(opacity=30); opacity:0.30; }
.google_translatextra:hover img { border:0; filter:alpha(opacity=0.30); opacity:0.30; }
.h_null{ padding: 0; margin: 0; }
.header{ background: #f1f1f1; text-align: left; }
.head{ <?php if(isset($div_head)==1){ echo 'background: url("'.$div_head.'") no-repeat center center;'; } ?> color:#09F; height:30px; <?php if($i != 3){ echo 'border-radius:10px 10px 0px 0px;'; } ?> }
.herramientas{ <?php if(isset($div_head)==1){ echo 'background: url("'.$div_head.'");'; } ?> <?php if($i==3){ echo 'background-color: #000;'; }else if ($i != 3){ echo 'background-color: #6495ed; border-radius:10px 10px 10px 10px;'; } ?> box-shadow:2px 2px 25px #CCCCCC, -2px -2px #999;  font-size:16px; height:19px; text-align:right !important; }
.img{ text-align:center; top:auto; }
.info{ color:#FFF; text-align:center; }
.listado_articulos{}
.loading{ <?php if(isset($div_loading)==1){ echo 'background: url("'.$div_loading.'") no-repeat center center;'; } ?> }/* PRECARGADOR DE IMAGENES */
.menu{ color:#FFF; text-align:center; }
.section-separator{ clear:both; font-size:0px; height:13px; line-height:0; }
.sidebar1{ float: left; padding-bottom: 10px; width: 1px; }
.sidebar2{ <?php if(isset($sidebar)==1){ echo 'background: url("'.$sidebar.'") repeat-y;'; } ?> <?php if($i==3){ echo 'background-color: #000;'; }else if ($i==1 || $i==4){ echo 'background-color: #6495ed;'; } ?> <?php if($i != 3){ echo 'border-radius:10px 10px 10px 10px;'; } ?> box-shadow:2px 2px 25px #CCCCCC, -2px -2px #999; clear:right; float:left; font-size:14px; height:auto; padding: 30px 10px 30px 10px; width:205px; }
.sidebar3{ <?php if(isset($curve)==1){ echo 'background: url("'.$curve.'"); ';  } ?><?php if($i==3){ echo 'background-color: #000;'; }else if ($i==1 || $i==4){ echo 'background-color: #87cefa;'; } ?> /* greenyellow #adff2f,lawngreen	#7cfc00 */ <?php if($i != 3){ echo 'border-radius:10px 10px 10px 10px;'; } ?> box-shadow:2px 2px 25px #CCCCCC, -2px -2px #999; /*box-shadow: 2px 2px 25px #D2691E;  box-shadow: 0 11px 5px -5px black;*/ font-size: 14px; height:auto; width: 460px; }
.space{ clear:both; text-align:center; }
.subherramientas{ <?php if($i !=3){ echo 'color: #FFF;'; }else { echo 'color:#09F;'; } ?> float:left; }
.titulom{ color:#FFF !important; font-size:18px; font-style:oblique; }
.titulo{ color:#FFF !important; font-size:18px; font-style:oblique; font-weight:bold; }
.zoom img:hover{ zoom: 120%; }
a.link{ color: #1535BF !important; }
input[type='password'], .centrado{ text-align:center; }
input[type='text'], .centrado{ text-align:center; }
span.logo{ font-family: Monotype Corsiva; color: rgba(0,0,223,0.4); font-weight:bold; font-size:80px; } /*39,173,170,0.6*/


}