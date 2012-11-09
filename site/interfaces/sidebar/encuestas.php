<div id="encuestas">
    <div class="section-separator"></div>
	<div id="encuesta">
		<div class="titulo">Encuesta</div>
		<hr>
		<table>
			<tr>
				<td style="text-align:justify;">En terminos de diseño, ¿Como le parece nuestra web?</td>
			</tr>
			<tr><td>&nbsp;</td></tr>
				<tr><td><input name="encuesta_prueba" type="radio" value="1" checked="checked "/>Excelente</td></tr>
				<tr><td><input name="encuesta_prueba" type="radio" value="2" />Buena</td></tr>
				<tr><td><input name="encuesta_prueba" type="radio" value="3" />Regular</td></tr>
				<tr><td><input name="encuesta_prueba" type="radio" value="4" />Pesima</td></tr>
				<tr><td><input name="encuesta_prueba" type="radio" value="5" />Sin Comentarios</td></tr>
				<tr>
					<td>Total de votos: <a class="zoom" title="Click para ver la votacion!" href="#" onclick="window.open(this.href,'win2','width=320,height=180,menubar=yes,resizable=yes'); return false;"><img alt="" src="../themes/cliente/img/estadistica.png" width="16" height="16" /></a>&nbsp;&nbsp;<input name="votar" type="submit" value="Votar" onclick="votos();"/></td>
				</tr>
		</table>
	</div>
</div>
<script type="text/javascript">
	function votos(){
		alert("Su voto a sido enviado con exito!.");
	}
</script>