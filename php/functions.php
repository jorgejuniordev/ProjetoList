<?php
////////////////////////////////////////////////////////////////////////
// PROJETO: LIST - Livre Inclusão Social Tecnológica - PINA 2016      //
// Mesa de testes e estudos arquitetura e organização de computadores //
// Autores: Cíntia Souza, Emille Oliveira e Geovania Dias	          //
// Orientação: Helder Alves, Ivo Chaves e Thiago Pereira              //
////////////////////////////////////////////////////////////////////////
	
	// DEFINIÇÕES
	define("titulo", "PROJETO: LIST", true);
	define("startup", "ALIC SOFT", true);
	define("subtitulo", "Livre Inclusão Social Tecnológica - PINA 2016", true);
	define("autores", "Cíntia Souza, Emille Oliveira e Geovania Dias", true);
	define("orientadores", "Helder Alves, Ivo Chaves e Thiago Pereira", true);

	// GET URL
  	if(isset($_GET['msg'])){
	 	$acc = new Logar();
	 	$acc->setAction($_GET['msg']);
	 	$acc->Action();
	 	$erro = $acc->getErro();
  	}

  	// FUNÇÃO CALCULAR BYTES
  	function calcBytes($Bytes){
	  $Type=array("", "kilo", "mega", "giga", "tera");
	  $counter=0;
	  while($Bytes>=1024){
	    $Bytes/=1024;
	    $counter++;
	  }
	  return("".$Bytes." ".$Type[$counter]."bytes");
	}

/*
  	#####Selecione uma das opções######
		1. Apresentar todos(apresenta todos os componentes, sendo um de cada vez)
		2. MEMORIA SECUNDARIA: HD
		3. PORTA PARALELA
		4. MEMORIA PRINCIPAL: RAM
		5. PCI 
		6. CPU
		7. CHIPSET NORTE E SUL
		8. MEMORIA SECUNDARIA: DVD ROM
		9. FONTE DE ALIMENTAÇÃO

	====Controle de Leds=====
		1.Acender todos Leds
		2.Apagar todos Leds
		3.Apresentar estrutura do computador (gera o segundo Menu);
		4.Sair;
*/

  	function content(){
		if($_SESSION['acessibilidade']==0){
	  		if(!isset($_GET['action'])){
		  		require_once 'home.php';
		  	}else{
		  		switch($_GET['action']){
		  			case 'home':
					    if(isset($_SESSION['logado'])):
				    		require_once 'home.php';
				        endif;
		  			break;

		  			case 'all':
					    if(isset($_SESSION['logado'])):
				    		require_once 'todos.php';
				        endif;
		  			break;

		  			case 'all2':
					    if(isset($_SESSION['logado'])):
				    		require_once 'todos2.php';
				        endif;
		  			break;

		  			case 'mhd':
					    if(isset($_SESSION['logado'])):
				    		require_once 'memoriasecundaria.php';
				        endif;
		  			break;

		  			case 'ppa':
					    if(isset($_SESSION['logado'])):
				    		require_once 'portaparalela.php';
				        endif;
		  			break;

		   			case 'mpr':
					    if(isset($_SESSION['logado'])):
				    		require_once 'memoriaram.php';
				        endif;
		  			break;

		   			case 'pci':
					    if(isset($_SESSION['logado'])):
				    		require_once 'pci.php';
				        endif;
		  			break;

		   			case 'cpu':
					    if(isset($_SESSION['logado'])):
				    		require_once 'cpu.php';
				        endif;
		  			break;

		   			case 'cns':
					    if(isset($_SESSION['logado'])):
				    		require_once 'chipset.php';
				        endif;
		  			break;

		   			case 'mdr':
					    if(isset($_SESSION['logado'])):
				    		require_once 'memoriadvd.php';
				        endif;
		  			break;

		   			case 'fal':
					    if(isset($_SESSION['logado'])):
				    		require_once 'fontealimentacao.php';
				        endif;
		  			break;
		  			
		  			case 'document':
					    if(isset($_SESSION['logado'])):
				    		require_once 'documentacao.php';
				        endif;
		  			break;		 

		  			case 'admin':
					    if(isset($_SESSION['logado'])):
				    		require_once 'admin.php';
				        endif;
		  			break;
		  			
		  			case 'apresentar':
					    if(isset($_SESSION['logado'])):
				    		require_once 'apresentar.php';
				        endif;
		  			break;

		  			default:
					    if(isset($_SESSION['logado'])):
				    		require_once 'home.php';
				        endif;
		  			break;
			  	}
		  	}	 
		}else{
			if(!isset($_GET['action'])){
				require_once 'acessibilidade.php';
			}else{
				switch($_GET['action']){
					case 'acessibilidade':
						if(isset($_SESSION['logado'])):
					    		require_once 'acessibilidade.php';
						endif;
					break;
			  		default:
					    if(isset($_SESSION['logado'])):
					   		require_once 'acessibilidade.php';
						endif;
			  		break;
		  		}
			}
		}
	}
  	

	function MensagemSession(){
		if(isset($_SESSION['mensagem']) && $_SESSION['mensagem'] != ""){
			switch ($_SESSION['mensagem']) {
				case 'addPort':
					echo "<script>Notify.Success('Adicionada com sucesso.');</script>";
				break;
				
				case 'accPort':
					echo "<script>Notify.Success('Trocada com sucesso.');</script>";
				break;

				default:
					# code...
				break;
			}
				unset($_SESSION['mensagem']);
		}
	}