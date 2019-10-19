<?php

    if($_SERVER['REQUEST_METHOD']=='GET'){
        include_once 'class/Visualizar.class.php';
        $camp = Visualizar::namePort();
        $port = fopen($camp, "w");
        // LED 01
        if(isset($_GET['apres'])){
            $apres = $_GET['apres'];
            if($apres=='on'){ // LIGA led01
                fwrite($port, "k");
            }
            if($apres=='off'){ // DESLIGAled01
                fwrite($port, "k");
            }
        }

        // acender e apagar leds
        if(isset($_GET['leds'])){
            $leds= $_GET['leds'];
            if($leds=='on'){ // LIGA leds
                fwrite($port, "d");
                include_once 'ligarleds.php';
            }
            if($leds=='off'){ // DESLIGAleds
                fwrite($port, "D");
            }
        }

			// led01
        if(isset($_GET['led01'])){
            $led01= $_GET['led01'];
            if($led01=='on'){ // LIGA 
                fwrite($port, "z");
            }
            if($led01=='off'){ // DESLIGA
                fwrite($port, "Z");
            }
        }

		// led02
        if(isset($_GET['led02'])){
            $led02= $_GET['led02'];
            if($led02=='on'){ // LIGA 
                fwrite($port, "x");
            }
            if($led02=='off'){ // DESLIGA
                fwrite($port, "X");
            }
        }

		// led03
        if(isset($_GET['led03'])){
            $led03= $_GET['led03'];
            if($led03=='on'){ // LIGA 
                fwrite($port, "c");
            }
            if($led03=='off'){ // DESLIGA
                fwrite($port, "C");
            }
        }

		// led04
        if(isset($_GET['led04'])){
            $led04= $_GET['led04'];
            if($led04=='on'){ // LIGA 
                fwrite($port, "v");
            }
            if($led04=='off'){ // DESLIGA
                fwrite($port, "V");
            }
        }
        
        // led05
        if(isset($_GET['led05'])){
            $led05= $_GET['led05'];
            if($led05=='on'){ // LIGA 
                fwrite($port, "b");
            }
            if($led05=='off'){ // DESLIGA
                fwrite($port, "B");
            }
        }

		// led06
        if(isset($_GET['led06'])){
            $led06= $_GET['led06'];
            if($led06=='on'){ // LIGA 
                fwrite($port, "n");
            }
            if($led06=='off'){ // DESLIGA
                fwrite($port, "N");
            }
        }

		// led07
        if(isset($_GET['led07'])){
            $led07= $_GET['led07'];
            if($led07=='on'){ // LIGA 
                fwrite($port, "m");
            }
            if($led07=='off'){ // DESLIGA
                fwrite($port, "M");
            }
        }

		// led08
        if(isset($_GET['led08'])){
            $led08= $_GET['led08'];
            if($led08='on'){ // LIGA 
                fwrite($port, "a");
            }
            if($led08=='off'){ // DESLIGA
                fwrite($port, "A");
            }
        }
        
        
    }
