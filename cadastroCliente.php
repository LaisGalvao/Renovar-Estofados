<?php

	$nome = htmlspecialchars($_POST['txtNomeCli']);
	
	$rg = htmlspecialchars($_POST['txtRg']);
	
	$cpf = htmlspecialchars($_POST['txtCpf']);
	
	$endereco = htmlspecialchars($_POST['txtEndereco']);
	
	$telefone = htmlspecialchars($_POST['txtTelefone']);
	
	
	$celular = htmlspecialchars($_POST['txtCelular']);
	
	
	$email = htmlspecialchars($_POST['txtEmail']);
	
	$bairro = htmlspecialchars($_POST['txtBairro']);
	
	$numeroCasa = htmlspecialchars($_POST['txtNumCasa']);
	@$numeroCasa = number_format($numeroCasa);
	
	$compCasa = htmlspecialchars($_POST['txtCompCasa']);
	
	$cep = htmlspecialchars($_POST['txtCep']);
	
	$senha = htmlspecialchars($_POST['txtSenha']);

	//echo ("telefone: ".$telefone." --- celular: ".$celular);
	
	$opcoes = ['cost' => 8, ];
	
	//a linha abaixo cria o método de criptografia,
	//fazendo com que a base seja codificada e embolada em outros caracteres
	$senha = password_hash($senha, PASSWORD_BCRYPT, $opcoes);

	if(empty($nome) || empty($rg) || empty($cpf) || empty($endereco) || empty($telefone) || empty($celular) || 
	empty($email) || empty($bairro) || empty($numeroCasa) || empty($compCasa) || empty($cep) || empty($senha)){
		
		if(empty ($nome)){
			echo("<script>
			alert('O campo nome é obrigatório.'); 
			window.location.href='cadCliente.html';
		</script>");
			
		}else if (empty ($rg)){
			echo("<script>
			alert('O campo rg é obrigatório.'); 
			window.location.href='cadCliente.html';
		</script>");
			
		}else if(empty ($cpf)){
			echo("<script>
			alert('O campo cpf é obrigatório.'); 
			window.location.href='cadCliente.html';
		</script>");
			
		}else if(empty ($endereco)){
			echo("<script>
			alert('O campo endereço é obrigatório.'); 
			window.location.href='cadCliente.html';
		</script>");
			
		}else if(empty ($telefone)){
			echo("<script>
			alert('O campo telefone é obrigatório.'); 
			window.location.href='cadCliente.html';
		</script>");
			
		}else if(empty ($celular)){
			echo("<script>
			alert('O campo nome é obrigatório.'); 
			window.location.href='cadCliente.html';
		</script>");
		
		}else if(empty ($email)){
			echo("<script>
			alert('O campo nome é obrigatório.'); 
			window.location.href='cadCliente.html';
		</script>");
			
		}else if(empty ($bairro)){
			echo("<script>
			alert('O campo nome é obrigatório.'); 
			window.location.href='cadCliente.html';
		</script>");
		
		}else if(empty ($numeroCasa)){
			echo("<script>
			alert('O campo nome é obrigatório.'); 
			window.location.href='cadCliente.html';
		</script>");
			
		}else if(empty ($compCasa)){
			echo("<script>
			alert('O campo nome é obrigatório.'); 
			window.location.href='cadCliente.html';
		</script>");
			
		}else if(empty ($cep)){
			echo("<script>
			alert('O campo nome é obrigatório.'); 
			window.location.href='cadCliente.html';
		</script>");
			
		}else if(empty ($senha)){
			echo("<script>
			alert('O campo nome é obrigatório.'); 
			window.location.href='cadCliente.html';
		</script>");
			
		}
		
		
	}else{
		
		require 'conexao.php';

		$stmt = $conn->prepare("INSERT INTO tbcadcliente(nome,rg,cpf,endereco,telefone,email, celular ,bairro,numero,complemento,cep,senha) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");

		$stmt -> bind_param("siisssssisis", $nome, $rg, $cpf, $endereco, $telefone, $email, $celular, $bairro, $numeroCasa, $compCasa, $cep, $senha);
		$stmt -> execute();
		
		
		echo("<script>
			alert('Usuário cadastrado com sucesso'); 
			window.location.href='cadCliente.html';
		</script>");
		
		$conn -> close();
	}
?>