<?php

	require 'conexao.php';
	
	SESSION_START();
	
	if(!isset($_SESSION['Nome']) && !isset($_SESSION['Senha'])){
		
		header("sair.php");
		
		exit;
	}else{
	
		$user= $_SESSION['Nome'];
		
		echo "<label class='userLog'>Bem vindo(a):".$user."</label> <a href='sair.php'>Sair</a> <a href='Gerenciamento/telaHome.php'>Voltar ao Gerenciamento</a>";
	}
		
		
	
	
	
?>