<?php

    // INCLUSÕES;
    include_once 'class/LogarSistema.class.php';
    include_once 'php/functions.php';

    session_start();
    Logar::verificaLogado();
    include_once 'php/logout.php';

    // REMOVER ERROS;
    error_reporting(0);
    ini_set(“display_errors”, 0 );

?>
<html lang="pt-BR">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
  <title><?=titulo." - ".subtitulo;?></title>
  <!-- Mobile viewport -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes"/>
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
  <!-- CSS-->
  <!-- Google web fonts. You can get your own bundle at http://www.google.com/fonts. Don't forget to update the CSS accordingly!-->
  <link href='http://fonts.googleapis.com/css?family=Droid+Serif|Ubuntu' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" type="text/css" media="all" href="css/fontes.css"/> 
  <link rel="stylesheet" href="css/normalize_.css">
  <link rel="stylesheet" href="css/style_notifications.css">
  <link rel="stylesheet" href="js/flexslider/flexslider.css">
  <link rel="stylesheet" href="css/basic-style.css">
  <!-- end CSS-->

  <!-- JS-->
  <script src="js/libs/modernizr-2.6.2.min.js"></script>
  <script type="text/javascript" src="js/notify.js"></script>
  <script src="js/jquery.min.js"></script>
  <script type="text/javascript">
    Notify.Settings = {
      soundsOff: false,
        animDuration: {
          success: 8000,
          warning: 8000,
          error: 8000
        }
      };

    // <![CDATA[
    $(document).ready(function(){
      $(document).bind("contextmenu",function(e){
        return false;
      });
    });
    // ]]>
  </script>
  <style type="text/css">
      #columnsdemo .grid_1,
      #columnsdemo .grid_2,
      #columnsdemo .grid_3,
      #columnsdemo .grid_4,
      #columnsdemo .grid_5,
      #columnsdemo .grid_6,
      #columnsdemo .grid_7,
      #columnsdemo .grid_8,
      #columnsdemo .grid_9,
      #columnsdemo .grid_10,
      #columnsdemo .grid_11,
      #columnsdemo .grid_12 {
        border: solid 1px #999;
        color:#999;
        text-align: center;
        margin-top:20px;
        padding:20px 15px;
      }
  </style>
  <!-- jQuery -->
  <script src="js/jquery.min.js"></script>
</head>
<body>
  <!-- header area -->
  <header class="wrapper clearfix">
    <div id="banner">        
      <div id="logo"><a href="?action=home"><img src="img/basic-logo.png" alt="logo"></a></div> 
    </div>  
  </header>
  <!-- end header -->
  <!-- main content area -->   
  <div id="main" class="wrapper">
    <?php 
      // MENSAGENS DE SESSIONS;
      MensagemSession();
      content(); 
    ?>
  </div>
  <!-- #end div #main .wrapper -->
  <!-- footer area -->    
  <footer>
    <div id="colophon" class="wrapper clearfix">
      <?=titulo;?>
    </div>
    <div id="attribution" class="wrapper clearfix" style="color:#666; font-size:11px;">
      @2017 Todos os direitos reservados by <a style="color:#777;"><?=ucfirst(mb_strtolower(startup));?></a>.
    </div>
    <!--end attribution-->
  </footer><!-- #end footer area --> 

<!-- jQuery -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/libs/jquery-1.9.0.min.js">\x3C/script>')</script>

<script defer src="js/flexslider/jquery.flexslider-min.js"></script>

<!-- fire ups - read this file!  -->   
<script src="js/main.js"></script>

<!-- Pushy JS -->
<script src="js/pushy.min.js"></script>
<!--end logon -->
<?php echo isset($erro) ? $erro : ""; ?>
</body>
</html>