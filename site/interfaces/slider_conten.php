<div id="page" style="width:600px; height: 350px;">
  <ul id="slider1">
    <?php
      if (isset($_SESSION['user'])) {
        if(file_exists('interfaces/sliders/conten_0.php')){ include('interfaces/sliders/conten_0.php'); }
      }else{
        if(file_exists('interfaces/sliders/conten_1.php')){ include('interfaces/sliders/conten_1.php'); }
      }
    ?>
    <?php if(file_exists('interfaces/sliders/conten_4.php')){ include('interfaces/sliders/conten_4.php'); } ?>
    <?php if(file_exists('interfaces/sliders/conten_2.php')){ include('interfaces/sliders/conten_2.php'); } ?>
    <?php if(file_exists('interfaces/sliders/conten_3.php')){ include('interfaces/sliders/conten_3.php'); } ?>
    <?php if(file_exists('interfaces/sliders/conten_5.php')){ include('interfaces/sliders/conten_5.php'); } ?>
    <?php if(file_exists('interfaces/sliders/conten_6.php')){ include('interfaces/sliders/conten_6.php'); } ?>
  </ul>
</div><!-- end page -->
<div class="thumbs">
  <?php
    if (isset($_SESSION['user'])) { echo '<a href="">Servicio |</a>'; }else{ echo '<a href="">Bienvenidos |</a>'; }
  ?>
  <a href="">Galeria |</a>
  <a href="">Registro |</a>
  <a href="">Mision |</a>
  <a href="">Vision |</a>
  <a href="">Politicas</a>
</div>