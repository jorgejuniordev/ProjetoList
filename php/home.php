<?php 
    include_once 'class/Visualizar.class.php';
    include_once 'functions.php';
?>
<!-- hero area (the grey one with a slider -->
<section id="hero" class="clearfix">
<!-- responsive FlexSlider image slideshow -->
  <div class="wrapper">
    <div class="row"> 
      <div class="grid_5">
        <h1><?=titulo;?></h1>
          <h3><?=subtitulo;?></h3>
          <p>
            <?php if($_SESSION['tipo_de_conta']=='admin'){ ?>
            <a href="?action=admin" class="buttonlink-admin">[ADMIN] VISUALIZAR DADOS</a>
            <?php } ?>
            <a href="?action=apresentar" class="buttonlink">ACESSAR SISTEMA</a>
            <a href="?action=document" class="buttonlink">ACESSAR DOCUMENTAÇÃO</a>
            <a href="?action=sair" class="buttonlink">SAIR</a>
          </p>
      </div>
    <?php include_once ('slide.php'); ?>
    </div><!-- end row -->
  </div><!-- end wrapper -->
</section><!-- end hero area -->










