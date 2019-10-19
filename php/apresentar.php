<?php include_once 'arduino.php'; ?> 
<div id="linkr"><a href="?action=home" class="buttonlink-admin">VOLTAR</a></div>
 <!-- main content area -->   
<div id="main" class="wrapper">
<!-- content area -->    
	<section id="content" class="wide-content">
        <div class="row"> 
            <div class="grid_6">
                <h2 class="first-header"><center>APRESENTAR CADA ITEM</center></h2>
                <img src="img/document02.jpg" />
                <a href="?action=all2" class="buttonlink"><center>APRESENTAR CADA ITEM</center></a>
            </div>

            <div class="grid_6">
                <h2 class="first-header"><center>APRESENTAR TODOS OS LEDS</center></h2>
                <img src="img/document01.jpg" />
                <form method="GET" action="?action=apresentar">
                    <input type="hidden" name="action" value="apresentar"/>
                    <?php if(isset($_GET['apres']) && ($_GET['apres']=='on')){ ?>
                        <button type="submit" value="off" class="buttonlink" name="apres">Apresentar Todos</button>
                    <?php }else{ ?>
                        <button type="submit" value="on" class="buttonlink" name="apres">Apresentar Todos</button>
                    <?php } ?>
                </form>
            </div>
        </div>
        <div class="row"> 
            <div class="grid_6">
                <h2 class="first-header"><center>ACENDER TODOS LEDS</center></h2>
                <img src="img/leds.jpg" />
                <form method="GET" action="?action=apresentar">
                    <input type="hidden" name="action" value="apresentar">
                    <?php if(isset($_GET['leds']) && ($_GET['leds']=='on')){ ?>
                        <button type="submit" value="off" class="buttonlink" name="leds">Desligar Todos</button>
                    <?php }else{ ?>
                        <button type="submit" value="on" class="buttonlink" name="leds">Ligar Todos</button>
                    <?php } ?>
                </form>
            </div>  
            <div class="grid_6">
                <h2 class="first-header"><center>SAIR DO SISTEMA</center></h2>
                <img src="img/home.jpg" />
                <form method="GET" action="arduino1.php">
                    <input type="hidden" name="action" value="led01_in">
                     <a href="?action=sair" class="buttonlink"><center>SAIR</center></a>
                </form>
            </div>
        </div>
	</section><!-- end content area -->   
</div><!-- #end div #main .wrapper -->
