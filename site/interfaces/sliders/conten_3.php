<li´>
  <div style="width:550px;">
    <center>
      <form name="registro" action="../php/crear_cliente.php">
        <h2>Registrarse</h2>
      <br />
      <table width="606" border="0">
        <tr>
          <td width="63">Nombre:</td>
          <td width="174"><input type="text" maxlength="15" name="nombre" />*</td>
          <td width="63">2Nombre:</td>
          <td width="266"><input type="text" maxlength="15" name="nombre2"/></td>
        </tr>
        <tr>
          <td>Apellido:</td>
          <td><input type="text" maxlength="15" name="apellido"/>*</td>
          <td>2Apellido:</td>
          <td><input type="text" maxlength="15" name="apellido2" /></td>
        </tr>
        <tr>
          <td>Email:</td>
          <td><input type="text" maxlength="30" name="email" />*</td>
          <td>Celular:</td>
          <td><input type="text" maxlength="10" name="celular" />*</td>
        </tr>
        <tr>
          <td>Usuario:</td>
          <td><input type="password" maxlength="6" name="user" />*</td>
          <td>Password:</td>
          <td><input type="password" maxlength="15" name="pass" />*</td>
        </tr>
        <tr>
          <td colspan="5">(*) Campos Obligatorios</td>
        </tr>
        <tr>
          <td colspan="5"><center>
            <input type="submit" name="input"/>
          </center></td>
        </tr>
      </table>
      </form>
    </center>
  </div>
</li>