<?php
	Require_once '/../controllers/Sessao.php';		
	@session_start();	
    unset($_SESSION);
    @session_destroy();
    header('Location: Formulario.html');
?>