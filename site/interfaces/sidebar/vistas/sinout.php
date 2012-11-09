<table>
  <tr>
    <?php 
      if (isset($_SESSION['user'])==1 && isset($_SESSION['pass'])==1 ) {
        $sql='SELECT `usuario`.`id`, CONCAT(`usuario`.`nombre`," ",`usuario`.`apellido`) AS nombre FROM `usuario`, `usuario_tipo` WHERE `usuario`.`user`="'.md5($_SESSION['user']).'" AND `usuario`.`pass`="'.$_SESSION['pass'].'" AND  `usuario`.`estado` = 1 AND `usuario`.`id_tipo` =  `usuario_tipo`.`id`'; 
        include('../clases/sql.php');
        if ($result > 0) {
          if ($row=mysql_fetch_array($result)) {
            echo '<td>'.$row['nombre'].'</td></tr>';
            echo '<tr><td><a href="?user_id='.$row['id'].'">Perfil</a></td></tr>';
            echo '<tr><td><a href="?user_id='.$row['id'].'">Servicios</a></td></tr>';
            echo '<tr><td><a href="../php/logout.php?user_id='.$row['id'].'">Salir</a></td>';
          }
        } 
      }
    ?>
  </tr>
</table>