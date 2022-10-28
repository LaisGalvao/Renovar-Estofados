<?php

require 'conexao.php';

$login = htmlspecialchars($_POST['txtlogin']);
$senha = htmlspecialchars($_POST['txtsenha']);

$entrar = "SELECT * FROM tbcadcliente WHERE email=?";


if(!$stmt = $conn->prepare($entrar)){
	
	die("Erro:".$conn->error);
	
} 

$stmt->bind_param("s",$login);

$stmt ->execute();

//a linha abaixo busca o usuário no banco e retorna pelo campo login
$result = $stmt->get_result();

if($result->num_rows >0){
	
	while($row = $result->fetch_assoc()){
		
		$hash = $row['senha'];
		
		if(!password_verify($senha,$hash)){
			
			echo"<script>alert('verifique se o usuário ou senha estão corretos.');window.location.href='login.html';</script>";
			
		}else{
			
			SESSION_START();
			$_SESSION['login'] = $login;
			$_SESSION['senha'] = $senha;
						
			echo "<script>window.location.href='index.html';</script>";

		
		}
		
	}
	
}else if($result->num_rows<0){
	
	//indica que não foi encontrado registro no banco e te pede para cadastrar:
	echo "<script>alert('Dados inválidos. Cadastre-se.');window.location.href='cadCliente.html';</script>";
	
}else{

//se ele não encontrar na busca por usuários comuns, executa as linhas abaixo:
$entraAdm = "SELECT * FROM tbUserGerenciamento WHERE Nome=?";

if(!$stmt = $conn->prepare($entraAdm)){
	
	die("Erro:".$conn->error);
	
} 

$stmt->bind_param("s",$login);

$stmt ->execute();

//a linha abaixo busca o usuário no banco e retorna pelo campo login
$result = $stmt->get_result();

if($result->num_rows >0){
	
	while($row = $result->fetch_assoc()){
		
		$hash = $row['Senha'];
		
		if(!password_verify($senha,$hash)){
			
			echo"<script>alert('verifique se o usuário ou senha estão corretos.');window.location.href='login.html';</script>";
			
		}else{
			
			SESSION_START();
			$_SESSION['Nome'] = $login;
			$_SESSION['Senha'] = $senha;
						
			//aqui nós temos acesso ao sistema de gerenciamento:
			echo "<script>window.location.href='Gerenciamento/telaHome.php';</script>";

		
		}
		
	}
	
}else{
	
	echo "<script>alert('Dados inválidos. Acesso restrito aos administradores.');window.location.href='login.html';</script>";
	
}

}

?>