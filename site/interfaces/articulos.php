<div class="section-separator"></div>
<div class="herramientas">
    <div class="subherramientas">
		<img alt="Articulo" style="padding: 0px 0px 0px 10px;" width="16" height="16" src="../themes/cliente/img/page_white_text.png" />&nbsp;<?php if(isset($_Request['result'])==1){ echo $row['titulo']; }else{ echo 'Bienvenidos'; } ?>
	</div>
	<div>
        <?php
			if(isset($row)==1){
				if(isset($row['pdf'])==1 && $row['pdf']==1){
					echo '<a title="Descargar PDF" href="pdf/imp_pdf.php?id='.$row['id'].'" onclick="window.open(this.href,'."'win2'".','."'status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=640,height=480,directories=no,location=no'".'); return false;" rel="nofollow"><img alt="" src="../../cliente/img/png/pdf_button.png"/></a>';
				}
				if(isset($row['impr'])==1 && $row['impr']==1){
					echo '<a title="Imprimir Articulo" href="imprimir.php?id='.$row['id'].'" onclick="window.open(this.href,'."'win2'".','."'status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=440,height=500,directories=no,location=no'".'); return false;"><img alt="" src="../../cliente/img/png/print.png"/></a>';
				}
				if(isset($row['mail'])==1 && $row['mail']==1){
					echo '<a href="mail/form_mail.php?user='.$row['autor'].'" title="Enviar E-Mail"  onclick="window.open(this.href,'."'win2'".','."'width=230,height=360,menubar=yes,resizable=yes'".'); return false;" style="color:#FF6"><img alt="" src="../../cliente/img/png/emailButton.png"/></a>';
				}
			}
		?>
		<a style="color:#FF6; padding: 0px 1px;" href="mail/form_mail.php" title="Enviar E-Mail" onclick="window.open(this.href,'win2','width=230,height=360,menubar=yes,resizable=yes'); return false;" rel="nofollow"><img alt="" height="18" src="../themes/cliente/img/icon_mail.png" width="18"/></a>
		<a style="padding: 0px 1px;" title="Imprimir Articulo" href="imprimir.php" onclick="window.open(this.href,'win2','status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=440,height=500,directories=no,location=no'); return false;" rel="nofollow"><img alt="" src="../themes/cliente/img/print.png" width="16" height="16"/></a>
		<a style="padding: 0px 1px;" title="Descargar PDF" href="pdf/imp_pdf.php" onclick="window.open(this.href,'win2','status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=640,height=480,directories=no,location=no'); return false;" rel="nofollow"><img alt="" src="../themes/cliente/img/pdf_button.png" width="16" height="16"/></a>
        <img alt="" style="padding: 0px 10px 0px 0px;" width="16" height="16" src="../themes/cliente/img/icon-date.gif" title="Publicado: <?php if(isset($_Request['result'])==1){ echo $row['creado']; }else{ echo '09/01/2012 12:45'; } ?>"/>&nbsp;
    </div>
</div>
<div class="section-separator"></div>
<table class="contenido">
	<tr>
   		<td>
			<div id="user_info">
				<div class="img"><?php if(file_exists('../themes/cliente/img/homer-comentario.png')){ echo '<img alt="" src="../themes/cliente/img/homer-comentario.png" width="150" height="110"/>'; }else{ echo '<img alt="" src="../themes/cliente/img/progress.gif" />'; }  ?></div>
   				<div id="data"><!-- INFORMACION DEL USUARIO EXTRA -->
					<p class="info"><a href="">@Djom20</a></p>
					<div class="section-separator"></div>
					<?php if(file_exists('interfaces/facebook/likes.php')){ include('interfaces/facebook/likes.php'); } ?>
					<p class="info">&nbsp;</p>
					<p class="info">&nbsp;</p>
				</div>
			</div>
        </td>
        <td><div class="section-separator"></div></td>
  		<td>
            <div id="cuerpo_contenido">Soy estudiante de Ingenier&iacute;a de Sistemas de 7&deg; semestre de la Universidad Sim&oacute;n Bol&iacute;var. Estoy en calidad de desarrollador en software, realizo aplicaciones de escritorio y dise&ntilde;os webs con flash, certificado por el sena en el dise&ntilde;o de flash. Dise&ntilde;o soluciones inform&aacute;ticas en flujos de datos y administraci&oacute;n de informaci&oacute;n. Administro y doy soluciones a redes inform&aacute;ticas, realizo soluciones a problemas en PC de hogar, certificado por el sena en fundamentos de ensamble y mantenimiento de computadoras para los procesos de soporte tecnico. Manejo lenguajes de programaci&oacute;n Visual Basic.Net, Java, Php con el paradigma de programaci&oacute;n orientada a objetos. Adem&aacute;s tambi&eacute;n manejo SQL para bases de datos Postgre, Oracle y MySQL, y Matlab para soluciones inform&aacute;ticas orientadas a los c&aacute;lculos matem&aacute;ticos.</div>
			<div class="section-separator"></div>
        </td>
	</tr>
	<tr>
    	<td colspan="3">
    		<?php if(file_exists('interfaces/facebook/comments.php')){ include('interfaces/facebook/comments.php'); }else{ if(file_exists('interfaces/facebook/comments_simple.php')){ include('interfaces/facebook/comments_simple.php'); } }  ?>
			<div class="section-separator"></div>
    	</td>
    </tr>
</table>