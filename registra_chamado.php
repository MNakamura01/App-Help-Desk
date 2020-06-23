<?php 
	
	session_start();

	$arquivo = fopen('../../app_help_desk/arquivo.txt', 'a'); //abre um novo arquivo de texto
	// a = tipo de edição, para saber mais consultar documentação do php


	$titulo = str_replace('#', '-', $_POST['titulo']);
	$categoria = str_replace('#', '-', $_POST['categoria']);
	$descricao = str_replace('#', '-', $_POST['descricao']);

	

	// str replace substitui qualquer # por um -, garantindo que não haverá nenhuma # digitado pelo usuário

	//implode ('#', #_POST) TENTAR UTILIZAR TAMBÉM!



	
	$texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL; // # foi utilizado para separar no arquivo texto
	//	PHP_EOL END OF LINE



	$arquivo = fopen('../../app_help_desk/arquivo.txt', 'a'); //abre um novo arquivo de texto
	// a = tipo de edição, para saber mais consultar documentação do php

	fwrite($arquivo, $texto);// recebe o parametro e o que será escrito | fopen() tem que ser salvo em uma variável

	fclose($arquivo); // fechar o arquivo


	header('Location: abrir_chamado.php?inclusao=ok')
?>