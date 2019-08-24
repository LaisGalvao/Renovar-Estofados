<?php

 $nomeOrc = htmlspecialchars($_POST['txtNomeOrc']);
 $telOrc = htmlspecialchars($_POST['txtTelOrc']);
 $emailOrc = htmlspecialchars($_POST['txtEmailOrc']);
 $celOrc = htmlspecialchars($_POST['txtCelOrc']);
 $selServ = htmlspecialchars($_POST['selServ']);
 $msgOrc = htmlspecialchars($_POST['msgOrc']);

	$pastaArqOrc = "arquivosOrc/";
	
	//a linha abaixo faz a inserção e o uso do arquivo
	$arquivos = $pastaArqOrc.basename($_FILES['txtArqOrc']['name']);

	if(empty ($nomeOrc) || empty ($telOrc) || empty ($emailOrc) || empty ($celOrc) || $selServ=="----------" || empty ($msgOrc)){
		
		if(empty ($nomeOrc)){
			echo("<script>
			alert('O campo nome é obrigatório.'); 
			window.location.href='cadOrcamento.php';
		</script>");
			
		}else if(empty ($telOrc)){
			echo("<script>
			alert('O campo telefone é obrigatório.'); 
			window.location.href='cadOrcamento.php';
		</script>");
			
		}else if(empty ($emailOrc)){
			echo("<script>
			alert('O campo email é obrigatório.'); 
			window.location.href='cadOrcamento.php';
		</script>");
			
		}else if(empty ($celOrc)){
			echo("<script>
			alert('O campo celular é obrigatório.'); 
			window.location.href='cadOrcamento.php';
		</script>");
			
		}else if($selServ=="----------"){
			echo("<script>
			alert('O campo serviço é obrigatório.'); 
			window.location.href='cadOrcamento.php';
		</script>");
		
		}else if(empty ($msgOrc)){
			echo("<script>
			alert('O campo mensagem é obrigatório.'); 
			window.location.href='cadOrcamento.php';
		</script>");
			
		}
		
	}else{
 
		require 'conexao.php';

		$stmt = $conn->prepare("INSERT INTO tborcamento(opcao_serv, nome, email, telefone, celular, mensagem, arquivo) VALUES (?,?,?,?,?,?,?)");

		$stmt ->bind_param("issssss", $selServ, $nomeOrc, $emailOrc, $telOrc, $celOrc, $msgOrc, $arqOrc);
		$stmt ->execute();
		
		
		echo("<script>
			alert('Usuário cadastrado com sucesso'); 
			window.location.href='cadOrcamento.php';
		</script>");
		
		$conn ->close();
	}
?>