<?php include_once 'arduino.php'; ?>
<div id="linkr"><a href="?action=all2" class="buttonlink-admin">VOLTAR</a></div>
<section id="page-header" class="clearfix">
    <!-- responsive FlexSlider image slideshow -->
    <div class="wrapper">
        <h1><?=subtitulo;?></h1>
    </div>
</section>

<!-- main content area -->   
<div class="wrapper" id="main"> 
    
<!-- content area -->    
    <div class="row"> 
        <div class="grid_5">
            <h2 class="first-header"><center>CPU</center></h2>
            <img src="img/cpu.jpg" />
            <form method="GET" action="?action=cpu">
                <input type="hidden" name="action" value="cpu">
                <?php if(isset($_GET['led03']) && ($_GET['led03']=='on')){ ?>
                    <button type="submit" value="off" class="buttonlink" name="led03">Desligar</button>
                <?php }else{ ?>
                    <button type="submit" value="on" class="buttonlink" name="led03">Ligar</button>
                <?php } ?>
            </form>
        </div>
        <div class="grid_7">
        <h3>O QUE É?</h3>
            <p><h1>Editar texto</h1>Disco rígido ou disco duro, popularmente chamado também de HD (derivação de HDD do inglês hard disk drive) ou winchester (termo em desuso), "memória de massa" ou ainda de "memória secundária" é a parte do computador onde são armazenados os dados. O disco rígido é uma memória não-volátil, ou seja, as informações não são perdidas quando o computador é desligado, sendo considerado o principal meio de armazenamento de dados em massa. Por ser uma memória não-volátil, é um sistema necessário para se ter um meio de executar novamente programas e carregar arquivos contendo os dados inseridos anteriormente quando ligamos o computador. Nos sistemas operativos mais recentes, ele é também utilizado para expandir a memória RAM, através da gestão de memória virtual. Existem vários tipos de interfaces para discos rígidos diferentes: IDE/ATA, Serial ATA, SCSI, Fibre channel, SAS.</p>
        </div>
                                       
    </div>
</div>
<!-- #end div #main .wrapper -->