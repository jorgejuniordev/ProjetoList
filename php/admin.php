<?php 
  // VERIFICA SE A CONTA É ADMINISTRADORA;
  if($_SESSION['tipo_de_conta']=='admin'){
    // INCLUI A CLASS DE VISUALIZAÇÃO CASO SEJA;
    include_once 'class/Visualizar.class.php';

    if(isset($_POST['submit'])):
      $port = new Visualizar();
      $port->setPortCaminho($_POST['newport']);
      $port->setPort($_POST['porta']);
      $port->addPort();
      if($port->getErro()):
        $erro = $port->getErro();
      endif;
    endif;

    if(isset($_POST['trocar'])):
      $port = new Visualizar();
      $port->setPort($_POST['portselect']);
      $port->accPort();
      if($port->getErro()):
        $erro = $port->getErro();
      endif;

    endif;

?>
<div id="linkr"><a href="?action=home" class="buttonlink-admin">VOLTAR</a></div>
<!-- main content area -->   
<div id="main" class="wrapper">
<!-- content area -->    
  <section id="content" class="wide-content">
      <div class="row"> 
        <div class="grid_4">
          <h2 class="first-header"><center>Nº DE CONTAS</center></h2>
            <img src="img/admin01.jpg" />
            <center><h3><b><?=Visualizar::mostrarAcc();?></b> CONTAS CADASTRADAS</h3></center>
        </div>
        <div class="grid_4">
          <h2 class="first-header"><center>Nº DE PESSOAS</center></h2>
            <img src="img/admin02.jpg" />
            <center><h3><b><?=Visualizar::mostrarNum();?></b> PESSOAS ACESSARAM</h3></center>
        </div>
        <div class="grid_4">
          <h2 class="first-header"><center>QNT. DE ACESSOS</center></h2>
            <img src="img/admin03.jpg" />
            <center><h3><b><?=Visualizar::mostrarAce();?></b> QUANTIADES DE ACESSOS</h3></center>
        </div>
    </div><!-- end row -->
    <div class="row"> 
      <div class="grid_6">
        <h2 class="first-header"><center>PORTA PADRÃO</center></h2>
          <img src="img/port1.jpg" />
          <div class="spam-small"></div>
          <form method="post" action="">
            <select name="portselect" id="portselect">
              <?=Visualizar::selectPort();?>
            </select>
            <button type="submit" name="trocar" id="trocar" value="trocar" class="btn">TROCAR</button>
            <h4><center>PORTA ATIVA: <b><?=Visualizar::namePort();?></b></center></h4>
          </form>
      </div>
      <div class="grid_6">
        <h2 class="first-header"><center>ADICIONAR PORTA</center></h2>
          <img src="img/port2.jpg" />
          <div class="spam-small"></div>
          <form method="post" action="">
            <input type="text" class="input-form" name="newport" placeholder="Digite o caminho da porta" maxlength="255" required/>
            <input type="text" class="input-form" name="porta" placeholder="Digite o nome da porta" maxlength="255" required/>

            <button type="submit" name="submit" id="submit" value="submit" class="btn">Adicionar</button>
          </form>
      </div>
    </div>
  </section><!-- end content area -->
</div><!-- #end div #main .wrapper -->

<div class="spam"></div>

<?php
  }else{
    // CASO A CONTA NÃO FOR ADMIN, ELA RETORNA AO HOME PAGE;
    header("Location:?action=home");
  }
?>
