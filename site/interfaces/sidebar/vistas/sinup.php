<div id="seccion">
	<center>
		<a id="mostrar" class="link" href="#"><img src="../themes/cliente/img/icon-user.gif" width="15" heigth="15"/>Iniciar Seccion</a>
		<br /><br />
		<div id="inicio_session" style="display: none;">
			<form id="session" method="POST" action="../php/validar_user.php">
				<table border="0">
				  <tr>
				    <td colspan="2"><h2 style="text-align: center;">Iniciar Session</h2><hr /></td>
				  </tr>
				  <tr>
				    <td><label value="nombre">Usuario:</label></td>
				    <td><input id="session_user" value="gmpg_8" class="centrado" type="password" name="user" maxlength="6" size="12" /></td>
				  </tr>
				  <tr>
				    <td><label value="nombre">Password:</label></td>
				    <td><input id="session_pass" value="123456" class="centrado" type="password" name="pass" maxlength="15" size="12"/></td>
				  </tr>
				  <tr>
				  	<td><input type="checkbox" value="1" name="recordar" /><label value="nombre"> Recodar</label></td>
				    <td style="text-align: right;"><input id="bttsession" type="submit" name="ok" value="Iniciar" /></td>
				  </tr>
				</table>
			</form>
		</div>
		<?php if(file_exists('interfaces/facebook/login.php')){ include('interfaces/facebook/login.php'); }  ?>
	</center>
</div>