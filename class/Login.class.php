<?php
	// Interface 
	interface iLogin{
	    public function logar();
	    public static function verificaLogado();
	    public function deslogar();   
	}