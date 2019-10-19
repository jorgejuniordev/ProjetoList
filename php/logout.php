<?php
	/* DESLOGAR DO SISTEMA */
    if(isset($_GET['action'])):
        if($_GET['action'] == 'sair'):
            if(isset($_SESSION['logado'])):
                session_destroy();
                header("Location:index.php?msg=logout");
            endif;
        endif;
    endif;