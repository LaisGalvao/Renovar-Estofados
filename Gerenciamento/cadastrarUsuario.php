<?php

	$nome = htmlspecialchars($_POST['txtNome']);
	$loginU = htmlspecialchars($_POST['txtLogin']);
	$senhaU = htmlspecialchars($_POST['txtSenha']);
	
	//a linha abaixo cria um vetor de opções de criptografia
	$opcoes = ['cost' => 8, ];
	
	//a linha abaixo cria o método de criptografia,
	//fazendo com que a base seja codificada e embolada em outros caracteres
	$senhaU = password_hash($senhaU, PASSWORD_BCRYPT, $opcoes);
	
	if(empty($nome) || empty ($loginU) || empty ($senhaU)){
		
		if(empty($nome)){
			echo("<script>alert('O campo nome é obrigatório.');
			window.location.href='cadUser.php';
			document.getElementById('txtNome').focus();
			</script>");

		}else if(empty($loginU)){
			echo("<script>alert('O campo login é obrigatório.');
			window.location.href='cadUser.php';
			document.getElementById('txtLogin').focus();
			</script>");
		}else if(empty($senhaU)){
			echo("<script>alert('O campo senha é obrigatório.');
			window.location.href='cadUser.php';
			document.getElementById('txtSenha').focus();
			</script>");
		}
		
	}else{
	
	require 'conexao.php';
	
	$inserir  = "INSERT INTO tbUserGerenciamento(Usuario, Senha, Nome) VALUES (?,?,?)";
	
	if(!$stmt = $conn-> prepare($inserir)){
		die("Erro de inserção: " .$conn->error);
		
	}
	
	$stmt -> bind_param("sss", $nome, $senhaU, $loginU);
	$stmt -> execute();
	$stmt -> close();
	
	echo("<script>
		alert('Usuário cadastrado com sucesso'); 
		window.location.href='cadUser.php';
	</script>");
	}
?>