<?php

	require 'conexao.php';
	
	SESSION_START();
	
	if(!isset($_SESSION['login']) && !isset($_SESSION['senha'])){
		
		header("sair.php");
		
		exit;
	}else{
	
		$user= $_SESSION['login'];
		
		echo "<label class='userLog'>Bem vindo(a):".$user."</label>  <a href='sair.php'>Sair</a>";
	}
		
		
	
	
	
?>