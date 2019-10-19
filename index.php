<?php
  include_once 'class/LogarSistema.class.php';
  include_once 'php/functions.php';
  session_start();
  //Logar::verificaLogon();
  if(isset($_SESSION['login'])):
    header("Location:logado.php");
  endif;
	if(isset($_POST['submit'])):
		$logar = new Logar();
		$logar->setLogin($_POST['login']);
		$logar->setSenha($_POST['senha']);
		$logar->logar();
		if($logar->getErro()):
			$erro = $logar->getErro();
		else:
			header("Location:logado.php?msg=success");
		endif;
	endif;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title><?=titulo." - ".subtitulo;?></title>
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
  <link rel="stylesheet" type="text/css" media="all" href="css/style_login.css"/>
  <link rel="stylesheet" type="text/css" media="all" href="css/fontes.css"/>
  <link rel="stylesheet" type="text/css" media="all" href="css/style_notifications.css"/>

  <!-- JS -->
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
</head>
<body>
  <!-- log form -->
  <div class="log-form">
    <h2>LOGIN</h2>
    <form class="formulario_login" action="index.php" method="POST">
      <input type="text" name="login" title="login" placeholder="login" required/>
      <input type="password" name="senha"  title="senha" placeholder="senha" required/>
      <button type="submit" name="submit" id="submit" value="Login" class="btn">Login</button>
    </form>
  </div>
  <?php echo isset($erro) ? $erro : ""; ?>
  <?php //actions(); ?>

  <!--end log form -->
</body>
</html>