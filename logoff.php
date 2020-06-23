<?php



	session_start();
	$_SESSION['autenticado'] = 'NAO';
	header('Location: index.php?');

	//OU REMOVER ÍNDICES DO ARRAY DA SESSÃO
	//unset()

	//DESTRUIR A VARIÁVEL DA SESSÃO 
	//session_destroy()
?>