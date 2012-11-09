<?php include('../../clases/conexion.php'); ?>
<article>
  <header><h3 class="tabs_involved">Administrador</h3>
  <ul class="tabs">
    <?php
      if ($_SESSION['id_tipo']==0){
        echo '<li><a href="#tab1">Administradores</a></li> <li><a href="#tab2">Trabajadores</a></li> <li><a href="#tab3">Conductores</a></li> <li><a href="#tab4">Clientes</a></li> <li><a href="#tab5">Rutas</a></li> <li><a href="#tab6">Servicios</a></li> <li><a href="#tab7">Vehiculos</a></li> <li><a href="#tab8">Ciudades</a></li> <li><a href="#tab9">Empresas</a></li>';
      }elseif ($_SESSION['id_tipo']==1){
        echo '<li><a href="#tab2">Trabajadores</a></li> <li><a href="#tab3">Conductores</a></li> <li><a href="#tab4">Clientes</a></li> <li><a href="#tab5">Rutas</a></li> <li><a href="#tab6">Servicios</a></li> <li><a href="#tab7">Vehiculos</a></li> <li><a href="#tab8">Ciudades</a></li>';
      }elseif ($_SESSION['id_tipo']==2){
        echo '<li><a href="#tab3">Conductores</a></li> <li><a href="#tab4">Clientes</a></li> <li><a href="#tab5">Rutas</a></li> <li><a href="#tab6">Servicios</a></li> <li><a href="#tab7">Vehiculos</a></li> <li><a href="#tab8">Ciudades</a></li>';
      }elseif ($_SESSION['id_tipo']==4){
        echo '<li><a href="#tab5">Rutas</a></li> <li><a href="#tab6">Servicios</a></li> <li><a href="#tab7">Vehiculos</a></li> <li><a href="#tab8">Ciudades</a></li>';
      }
    ?>
  </ul>
  </header>
  <div class="tab_container">
    <?php
      if ($_SESSION['id_tipo']==0) {
    ?>
    <div id="tab1" class="tab_content"><!-- ADMINISTRADORES -->
      <table class="tablesorter" cellspacing="0"> 
        <thead>
          <tr> 
            <th></th>
            <th>Estado</th>
            <th>Nombre</th> 
            <th>E-mail</th> 
            <th>Celular</th> 
            <th>Empresa</th>
            <th>Sede</th>
            <th>Acciones</th>
          </tr> 
        </thead> 
        <tbody>
          <?php
            $sql='SELECT `usuario`.`id`,CONCAT(`usuario`.`nombre`," ",`usuario`.`apellido`)as nombre,`usuario`.`email`,`usuario`.`celular`,`empresa`.`nombre` as empresa, `ciudad`.`nombre` as sede,`usuario`.`estado` FROM `usuario`,`empresa`, `ciudad`,`usuario_tipo` WHERE `usuario_tipo`.`id`=`usuario`.`id_tipo` AND `usuario_tipo`.`nombre` = "Administrador" AND `usuario`.`trabajo` = `empresa`.`id` AND `empresa`.`sede`= `ciudad`.`id`';
            include('../../clases/sql.php');
            if ($result > 0) {
              while ($row=mysql_fetch_array($result)) {
                echo '<tr><td>';
                echo '</td>';
                if($row['estado']==1){
                  echo '<td><input type="image" src="../../themes/admin/img/s_okay.png" title="Estado"></td>';
                }else{
                  echo '<td><input type="image" src="../../themes/admin/img/s_error.png" title="Estado"></td>';
                }
                echo '<td>'.$row['nombre'].'</td>';
                echo '<td>'.$row['email'].'</td>';
                echo '<td>'.$row['celular'].'</td>';
                echo '<td>'.$row['empresa'].'</td>';
                echo '<td>'.$row['sede'].'</td>';
                echo '<td><a href="nuevo.php?opcion=1&edit='.$row['id'].'"><input type="image" src="../../themes/admin/img/icn_edit.png" title="Edit"></a><a href="../../php/modificar_usuario.php?id='.$row['id'].'"><input type="image" src="../../themes/admin/img/icn_jump_back.png" title="Modificated"></a>';
                echo '<a href="../../php/eliminar_usuario.php?id='.$row['id'].'"><input type="image" src="../../themes/admin/img/icn_trash.png" title="Trash"></a></td></tr>';
              }
            }
          ?>
        </tbody> 
      </table>
    </div><!-- end of #tab1 -->
    <?php
      }
      if ($_SESSION['id_tipo']==0 || $_SESSION['id_tipo']==1) {
    ?>
    <div id="tab2" class="tab_content"><!-- TRABAJADORES -->
      <table class="tablesorter" cellspacing="0"> 
        <thead> 
          <tr> 
            <th></th> 
            <th>Estado</th>
            <th>Nombre</th> 
            <th>E-mail</th> 
            <th>Celular</th> 
            <th>Empresa</th>
            <th>Sede</th>
            <th>Acciones</th>
          </tr> 
        </thead> 
        <tbody>
          <?php
            if ($_SESSION['id_tipo']==0){
              $sql='SELECT `usuario`.`id`,CONCAT(`usuario`.`nombre`," ",`usuario`.`apellido`)as nombre,`usuario`.`email`,`usuario`.`celular`,`empresa`.`nombre` as empresa, `ciudad`.`nombre` as sede,`usuario`.`estado` FROM `usuario`,`empresa`, `ciudad`,`usuario_tipo` WHERE `usuario_tipo`.`id`=`usuario`.`id_tipo` AND `usuario_tipo`.`nombre` = "trabajador" AND `usuario`.`trabajo` = `empresa`.`id` AND `empresa`.`sede`= `ciudad`.`id`';
            }else{
              $sql='SELECT `usuario`.`id`,CONCAT(`usuario`.`nombre`," ",`usuario`.`apellido`)as nombre,`usuario`.`email`,`usuario`.`celular`,`empresa`.`nombre` as empresa, `ciudad`.`nombre` as sede,`usuario`.`estado` FROM `usuario`,`empresa`, `ciudad`,`usuario_tipo` WHERE `usuario_tipo`.`id`=`usuario`.`id_tipo` AND `usuario_tipo`.`nombre` = "trabajador" AND `usuario`.`trabajo` = `empresa`.`id` AND `empresa`.`sede`= `ciudad`.`id` AND  `empresa`.`id`='.$_SESSION['id_empresa'];
            }
            include('../../clases/sql.php');
            if ($result > 0) {
              while ($row=mysql_fetch_array($result)) {
                  echo '<tr><td>';
                  if($_SESSION['id_tipo'] > 0){ echo '<input type="image" src="../../themes/admin/img/icn_security.png" title="Segurity">'; }
                  echo '</td>';
                  if($row['estado']==1){
                    echo '<td><input type="image" src="../../themes/admin/img/s_okay.png" title="Estado"></td>';
                  }else{
                    echo '<td><input type="image" src="../../themes/admin/img/s_error.png" title="Estado"></td>';
                  }
                  echo '<td>'.$row['nombre'].'</td>';
                  echo '<td>'.$row['email'].'</td>';
                  echo '<td>'.$row['celular'].'</td>';
                  echo '<td>'.$row['empresa'].'</td>';
                  echo '<td>'.$row['sede'].'</td>';
                  echo '<td><a href="nuevo.php?opcion=2&edit='.$row['id'].'"><input type="image" src="../../themes/admin/img/icn_edit.png" title="Edit"></a><a href="../../php/modificar_usuario.php?id='.$row['id'].'">';
                  if ($_SESSION['id_tipo']==0){
                    echo '<input type="image" src="../../themes/admin/img/icn_jump_back.png" title="Modificated"></a><a href="../../php/eliminar_usuario.php?id='.$row['id'].'"><input type="image" src="../../themes/admin/img/icn_trash.png" title="Trash"></a></td></tr>';
                  }
              }
            }
          ?>
        </tbody> 
      </table>
    </div><!-- end of #tab2 -->
    <?php
      }
    ?>
    <div id="tab3" class="tab_content"><!-- CONDUCTORES -->
      <table class="tablesorter" cellspacing="0"> 
        <thead>
          <tr> 
            <th></th>
            <th>Estado</th>
            <th>Nombre</th> 
            <th>E-mail</th> 
            <th>Celular</th> 
            <th>Empresa</th>
            <th>Sede</th>
            <th>Acciones</th>
          </tr> 
        </thead> 
        <tbody>
          <?php
            if ($_SESSION['id_tipo']==0){
              $sql='SELECT `usuario`.`id`,CONCAT(`usuario`.`nombre`," ",`usuario`.`apellido`)as nombre,`usuario`.`email`,`usuario`.`celular`,`empresa`.`nombre` as empresa, `ciudad`.`nombre` as sede,`usuario`.`estado` FROM `usuario`,`empresa`, `ciudad`,`usuario_tipo` WHERE `usuario_tipo`.`id`=`usuario`.`id_tipo` AND `usuario_tipo`.`nombre` = "conductor" AND `usuario`.`trabajo` = `empresa`.`id` AND `empresa`.`sede`= `ciudad`.`id`';
            }else{
              $sql='SELECT `usuario`.`id`,CONCAT(`usuario`.`nombre`," ",`usuario`.`apellido`)as nombre,`usuario`.`email`,`usuario`.`celular`,`empresa`.`nombre` as empresa, `ciudad`.`nombre` as sede,`usuario`.`estado` FROM `usuario`,`empresa`, `ciudad`,`usuario_tipo` WHERE `usuario_tipo`.`id`=`usuario`.`id_tipo` AND `usuario_tipo`.`nombre` = "conductor" AND `usuario`.`trabajo` = `empresa`.`id` AND `empresa`.`sede`= `ciudad`.`id` AND  `empresa`.`id`='.$_SESSION['id_empresa'];
            }
            include('../../clases/sql.php');
            if ($result > 0) {
              while ($row=mysql_fetch_array($result)) {
                echo '<tr><td>';
                if($_SESSION['id_tipo'] > 0){ echo '<input type="image" src="../../themes/admin/img/icn_security.png" title="Segurity">'; }
                echo '</td>';
                if($row['estado']==1){
                  echo '<td><input type="image" src="../../themes/admin/img/s_okay.png" title="Estado"></td>';
                }else{
                  echo '<td><input type="image" src="../../themes/admin/img/s_error.png" title="Estado"></td>';
                }
                echo '<td>'.$row['nombre'].'</td>';
                echo '<td>'.$row['email'].'</td>';
                echo '<td>'.$row['celular'].'</td>';
                echo '<td>'.$row['empresa'].'</td>';
                echo '<td>'.$row['sede'].'</td>';
                echo '<td><a href="nuevo.php?opcion=2&edit='.$row['id'].'"><input type="image" src="../../themes/admin/img/icn_edit.png" title="Edit"></a><a href="../../php/modificar_usuario.php?id='.$row['id'].'">';
                if ($_SESSION['id_tipo']==0){
                  echo '<input type="image" src="../../themes/admin/img/icn_jump_back.png" title="Modificated"></a><a href="../../php/eliminar_usuario.php?id='.$row['id'].'"><input type="image" src="../../themes/admin/img/icn_trash.png" title="Trash"></a></td></tr>';
                }
              }
            }
          ?>
        </tbody> 
      </table>
    </div><!-- end of #tab3 -->
    <div id="tab4" class="tab_content"><!-- CLIENTES -->
      <table class="tablesorter" cellspacing="0"> 
        <thead> 
          <tr> 
            <th></th> 
            <th>Estado</th> 
            <th>Nombre</th> 
            <th>Email</th> 
            <th>Celular</th> 
            <th>Aciones</th> 
          </tr> 
        </thead> 
        <tbody>
          <?php
            if ($_SESSION['id_tipo']==0){
              $sql='SELECT `usuario`.`id`,CONCAT(`usuario`.`nombre`," ",`usuario`.`apellido`) as nombre,`usuario`.`email`,`usuario`.`celular`,`usuario`.`estado` FROM `usuario`,`usuario_tipo` WHERE `usuario`.`id_tipo` = `usuario_tipo`.`id` AND `usuario_tipo`.`nombre`="cliente"';
            }else{
              $sql='SELECT `usuario`.`id`,CONCAT(`usuario`.`nombre`," ",`usuario`.`apellido`) as nombre,`usuario`.`email`,`usuario`.`celular`,`usuario`.`estado` FROM `usuario`,`usuario_tipo` WHERE `usuario`.`id_tipo` = `usuario_tipo`.`id` AND `usuario_tipo`.`nombre`="cliente" AND `usuario`.`trabajo`='.$_SESSION['id_empresa'];
            }
            include('../../clases/sql.php');
            if ($result > 0) {
              while ($row=mysql_fetch_array($result)) {
                echo '<tr><td>';
                if($_SESSION['id_tipo'] > 0){ echo '<input type="image" src="../../themes/admin/img/icn_security.png" title="Segurity">'; }
                echo '</td>';
                if($row['estado']==1){
                  echo '<td><input type="image" src="../../themes/admin/img/s_okay.png" title="Estado"></td>';
                }else{
                  echo '<td><input type="image" src="../../themes/admin/img/s_error.png" title="Estado"></td>';
                }
                echo '<td>'.$row['nombre'].'</td>';
                echo '<td>'.$row['email'].'</td>';
                echo '<td>'.$row['celular'].'</td>';
                echo '<td><a href="nuevo.php?opcion=2&edit='.$row['id'].'"><input type="image" src="../../themes/admin/img/icn_edit.png" title="Edit"></a><a href="../../php/modificar_usuario.php?id='.$row['id'].'">';
                  if ($_SESSION['id_tipo']==0){
                    echo '<input type="image" src="../../themes/admin/img/icn_jump_back.png" title="Modificated"></a><a href="../../php/eliminar_usuario.php?id='.$row['id'].'"><input type="image" src="../../themes/admin/img/icn_trash.png" title="Trash"></a></td></tr>';
                  }
              }
            }
          ?>
        </tbody> 
      </table>
    </div><!-- end of #tab4 -->
    <div id="tab5" class="tab_content"><!-- RUTAS -->
      <table class="tablesorter" cellspacing="0"> 
        <thead> 
          <tr> 
            <th></th> 
            <th>Estado</th>
            <th>Conductor</th>  
            <th>Categoria</th> 
            <th>Origen</th> 
            <th>Destino</th>
            <th>Inicio</th> 
            <th>Fin</th>
            <th>Aciones</th> 
          </tr> 
        </thead> 
        <tbody>
          <?php
            if ($_SESSION['id_tipo']==0){
              $sql='SELECT `ruta`.`id`,CONCAT(`usuario`.`nombre`," ",`usuario`.`apellido`) as usuario,`servicio`.`nombre`, `ciudad`.`nombre` as origen,  ciudad2.`nombre` as destino,`ruta`.`inicio`,`ruta`.`fin`,`ruta`.`estado` FROM `ruta`,`servicio`,`ciudad`, `usuario`, `ciudad` as ciudad2 WHERE `servicio`.`id`=`ruta`.`id_servicio` AND `ciudad`.`id`=`ruta`.`origen` AND `ciudad2`.`id`=`ruta`.`destino` AND `servicio`.`id_usuario`= `usuario`.`id`';
            }else{
              $sql='SELECT `ruta`.`id`,CONCAT(`usuario`.`nombre`," ",`usuario`.`apellido`) as usuario,`servicio`.`nombre`, `ciudad`.`nombre` as origen,  ciudad2.`nombre` as destino,`ruta`.`inicio`,`ruta`.`fin`,`ruta`.`estado` FROM `ruta`,`servicio`,`ciudad`, `usuario`, `ciudad` as ciudad2 WHERE `servicio`.`id`=`ruta`.`id_servicio` AND `ciudad`.`id`=`ruta`.`origen` AND `ciudad2`.`id`=`ruta`.`destino` AND `servicio`.`id_usuario`= `usuario`.`id` AND `usuario`.`trabajo`='.$_SESSION['id_empresa'];
            }
            include('../../clases/sql.php');
            if ($result > 0) {
              while ($row=mysql_fetch_array($result)) {
                echo '<tr><td>';
                if($_SESSION['id_tipo'] > 0){ echo '<input type="image" src="../../themes/admin/img/icn_security.png" title="Segurity">'; }
                echo '</td>';
                if($row['estado']==1){
                  echo '<td><input type="image" src="../../themes/admin/img/s_okay.png" title="Estado"></td>';
                }else{
                  echo '<td><input type="image" src="../../themes/admin/img/s_error.png" title="Estado"></td>';
                }
                echo '<td>'.$row['usuario'].'</td>';
                echo '<td>'.$row['nombre'].'</td>';
                echo '<td>'.$row['origen'].'</td>';
                echo '<td>'.$row['destino'].'</td>';
                echo '<td>'.$row['inicio'].'</td>';
                echo '<td>'.$row['fin'].'</td>';
                echo '<td><a href="nuevo.php?opcion=2&edit='.$row['id'].'"><input type="image" src="../../themes/admin/img/icn_edit.png" title="Edit"></a><a href="../../php/modificar_usuario.php?id='.$row['id'].'">';
                  if ($_SESSION['id_tipo']==0){
                    echo '<input type="image" src="../../themes/admin/img/icn_jump_back.png" title="Modificated"></a><a href="../../php/eliminar_usuario.php?id='.$row['id'].'"><input type="image" src="../../themes/admin/img/icn_trash.png" title="Trash"></a></td></tr>';
                  }
              }
            }
          ?>
        </tbody> 
      </table>
    </div><!-- end of #tab5 -->
    <div id="tab6" class="tab_content"><!-- SERVICIOS -->
      <table class="tablesorter" cellspacing="0"> 
        <thead> 
          <tr> 
            <th></th> 
            <th>Estado</th> 
            <th>Usuario</th> 
            <th>Categoria</th> 
            <th>Precio</th> 
            <th>Aciones</th> 
          </tr> 
        </thead> 
        <tbody>
          <?php
            if ($_SESSION['id_tipo']==0){
              $sql='SELECT `servicio`.`id`,CONCAT(`usuario`.`nombre`," ",`usuario`.`apellido`) as usuario ,`servicio`.`nombre`,`servicio`.`precio`,`servicio`.`estado` FROM `servicio`,`usuario` WHERE `servicio`.`id_usuario`=`usuario`.`id`';
            }else{
              $sql='SELECT `servicio`.`id`,CONCAT(`usuario`.`nombre`," ",`usuario`.`apellido`) as usuario ,`servicio`.`nombre`,`servicio`.`precio`,`servicio`.`estado` FROM `servicio`,`usuario` WHERE `servicio`.`id_usuario`=`usuario`.`id` AND `usuario`.`trabajo`='.$_SESSION['id_empresa'];
            }
            include('../../clases/sql.php');
            if ($result > 0) {
              while ($row=mysql_fetch_array($result)) {
                echo '<tr><td>';
                if($_SESSION['id_tipo'] > 0){ echo '<input type="image" src="../../themes/admin/img/icn_security.png" title="Segurity">'; }
                echo '</td>';
                if($row['estado']==1){
                  echo '<td><input type="image" src="../../themes/admin/img/s_okay.png" title="Estado"></td>';
                }else{
                  echo '<td><input type="image" src="../../themes/admin/img/s_error.png" title="Estado"></td>';
                }
                echo '<td>'.$row['usuario'].'</td>';
                echo '<td>'.$row['nombre'].'</td>';
                echo '<td>$'.$row['precio'].'</td>';
                echo '<td><a href="nuevo.php?opcion=2&edit='.$row['id'].'"><input type="image" src="../../themes/admin/img/icn_edit.png" title="Edit"></a><a href="../../php/modificar_usuario.php?id='.$row['id'].'">';
                  if ($_SESSION['id_tipo']==0){
                    echo '<input type="image" src="../../themes/admin/img/icn_jump_back.png" title="Modificated"></a><a href="../../php/eliminar_usuario.php?id='.$row['id'].'"><input type="image" src="../../themes/admin/img/icn_trash.png" title="Trash"></a></td></tr>';
                  }
              }
            }
          ?>
        </tbody> 
      </table>
    </div><!-- end of #tab6 -->
    <div id="tab7" class="tab_content"><!-- VEHICULOS -->
          <table class="tablesorter" cellspacing="0"> 
            <thead> 
              <tr> 
                <th></th>
                <th>Estado</th>
                <th>Conductor</th>
                <th>Placa</th>
                <th>Empresa</th>
                <th>Ciudad</th>
                <th>Aciones</th> 
              </tr> 
            </thead> 
            <tbody>
              <?php
                if ($_SESSION['id_tipo']==0){
                  $sql='SELECT DISTINCT `vehiculo`.`id`, CONCAT(`usuario`.`nombre`," ",`usuario`.`apellido`) as usuario,`vehiculo`.`placa`,  `empresa`.`nombre` as empresa,`ciudad`.`nombre` as ciudad, `vehiculo`.`estado`  FROM `vehiculo`,`usuario`, `empresa`,`ciudad` WHERE  `vehiculo`.`id_usuario`=`usuario`.`id` AND  `empresa`.`sede`=`ciudad`.`id`';
                }else{
                  $sql='SELECT DISTINCT `vehiculo`.`id`, CONCAT(`usuario`.`nombre`," ",`usuario`.`apellido`) as usuario,`vehiculo`.`placa`,  `empresa`.`nombre` as empresa,`ciudad`.`nombre` as ciudad, `vehiculo`.`estado`  FROM `vehiculo`,`usuario`, `empresa`,`ciudad` WHERE  `vehiculo`.`id_usuario`=`usuario`.`id` AND  `empresa`.`sede`=`ciudad`.`id` AND `empresa`.`id`='.$_SESSION['id_empresa'];
                }
                include('../../clases/sql.php');
                if ($result > 0) {
                  while ($row=mysql_fetch_array($result)) {
                    echo '<tr><td>';
                    if($_SESSION['id_tipo'] > 0){ echo '<input type="image" src="../../themes/admin/img/icn_security.png" title="Segurity">'; }
                    echo '</td>';
                    if($row['estado']==1){
                      echo '<td><input type="image" src="../../themes/admin/img/s_okay.png" title="Estado"></td>';
                    }else{
                      echo '<td><input type="image" src="../../themes/admin/img/s_error.png" title="Estado"></td>';
                    }
                    echo '<td>'.$row['usuario'].'</td>';
                    echo '<td>'.$row['placa'].'</td>';
                    echo '<td>'.$row['empresa'].'</td>';
                    echo '<td>'.$row['ciudad'].'</td>';
                    echo '<td><a href="nuevo.php?opcion=2&edit='.$row['id'].'"><input type="image" src="../../themes/admin/img/icn_edit.png" title="Edit"></a><a href="../../php/modificar_usuario.php?id='.$row['id'].'">';
                  if ($_SESSION['id_tipo']==0){
                    echo '<input type="image" src="../../themes/admin/img/icn_jump_back.png" title="Modificated"></a><a href="../../php/eliminar_usuario.php?id='.$row['id'].'"><input type="image" src="../../themes/admin/img/icn_trash.png" title="Trash"></a></td></tr>';
                  }
                  }
                }
              ?>
            </tbody> 
          </table>
        </div><!-- end of #tab7 -->
        <div id="tab8" class="tab_content"><!-- CIUDADES -->
          <table class="tablesorter" cellspacing="0"> 
            <thead> 
              <tr> 
                <th></th> 
                <th>Estado</th> 
                <th>Nombre</th>
                <th>Aciones</th> 
              </tr> 
            </thead> 
            <tbody>
              <?php
                $sql='SELECT * FROM `ciudad` WHERE `id` > 0 ORDER by `nombre`';
                include('../../clases/sql.php');
                if ($result > 0) {
                  while ($row=mysql_fetch_array($result)) {
                    echo '<tr><td>';
                    if($_SESSION['id_tipo'] > 0){ echo '<input type="image" src="../../themes/admin/img/icn_security.png" title="Segurity">'; }
                    echo '</td>';
                    if($row['estado']==1){
                      echo '<td><input type="image" src="../../themes/admin/img/s_okay.png" title="Estado"></td>';
                    }else{
                      echo '<td><input type="image" src="../../themes/admin/img/s_error.png" title="Estado"></td>';
                    }
                    echo '<td>'.$row['nombre'].'</td>';
                    echo '<td><a href="nuevo.php?opcion=2&edit='.$row['id'].'"><input type="image" src="../../themes/admin/img/icn_edit.png" title="Edit"></a><a href="../../php/modificar_usuario.php?id='.$row['id'].'">';
                  if ($_SESSION['id_tipo']==0){
                    echo '<input type="image" src="../../themes/admin/img/icn_jump_back.png" title="Modificated"></a><a href="../../php/eliminar_usuario.php?id='.$row['id'].'"><input type="image" src="../../themes/admin/img/icn_trash.png" title="Trash"></a></td></tr>';
                  }
                  }
                }
              ?>
            </tbody> 
          </table>
        </div><!-- end of #tab8 -->
        <?php
          if ($_SESSION['id_tipo']==0) {
        ?>
        <div id="tab9" class="tab_content"><!-- EMPRESAS -->
          <table class="tablesorter" cellspacing="0"> 
            <thead> 
              <tr> 
                <th></th> 
                <th>Estado</th> 
                <th>Nombre</th> 
                <th>Ciudad</th> 
                <th>Administrador</th> 
                <th>Aciones</th> 
              </tr> 
            </thead> 
            <tbody>
              <?php
                if ($_SESSION['id_tipo']==0){
                  $sql='SELECT  `empresa`.`id`, `empresa`.`nombre`,`ciudad`.`nombre` as sede, CONCAT( `usuario`.`nombre`," ", `usuario`.`apellido`) as admin, `empresa`.`estado` FROM `empresa`,`ciudad`, `usuario` WHERE  `empresa`.`sede`=`ciudad`.`id` AND  `empresa`.`admin`= `usuario`.`id`';
                }else{
                  $sql='SELECT  `empresa`.`id`, `empresa`.`nombre`,`ciudad`.`nombre` as sede, CONCAT( `usuario`.`nombre`," ", `usuario`.`apellido`) as admin, `empresa`.`estado` FROM `empresa`,`ciudad`, `usuario` WHERE  `empresa`.`sede`=`ciudad`.`id` AND  `empresa`.`admin`= `usuario`.`id` AND `empresa`.`id`<>'.$_SESSION['id_empresa'];
                }
                include('../../clases/sql.php');
                if ($result > 0) {
                  while ($row=mysql_fetch_array($result)) {
                    echo '<tr><td>';
                    if($_SESSION['id_tipo'] > 0){ echo '<input type="image" src="../../themes/admin/img/icn_security.png" title="Segurity">'; }
                    echo '</td>';
                    if($row['estado']==1){
                      echo '<td><input type="image" src="../../themes/admin/img/s_okay.png" title="Estado"></td>';
                    }else{
                      echo '<td><input type="image" src="../../themes/admin/img/s_error.png" title="Estado"></td>';
                    }
                    echo '<td>'.$row['nombre'].'</td>';
                    echo '<td>'.$row['sede'].'</td>';
                    echo '<td>'.$row['admin'].'</td>';
                    echo '<td><a href="nuevo.php?opcion=2&edit='.$row['id'].'"><input type="image" src="../../themes/admin/img/icn_edit.png" title="Edit"></a><a href="../../php/modificar_usuario.php?id='.$row['id'].'">';
                  if ($_SESSION['id_tipo']==0){
                    echo '<input type="image" src="../../themes/admin/img/icn_jump_back.png" title="Modificated"></a><a href="../../php/eliminar_usuario.php?id='.$row['id'].'"><input type="image" src="../../themes/admin/img/icn_trash.png" title="Trash"></a></td></tr>';
                  }
                  }
                }
              ?>
            </tbody> 
          </table>
        </div><!-- end of #tab9 -->
        <?php
          }
        ?>
  </div><!-- end of .tab_container -->
</article><!-- end of content manager article -->