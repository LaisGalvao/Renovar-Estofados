<?php
		
	$nome_prod = htmlspecialchars($_POST['txtNome']);
	$color = htmlspecialchars($_POST['txtCor']);
	$preco = htmlspecialchars($_POST['txtPreco']);
	$qtd = htmlspecialchars($_POST['txtQtd']);
	$detalhes = htmlspecialchars($_POST['txtDetalhes']);
	
	@$preco = number_format($preco,2,',','.');
	@$qtd = number_format($qtd);
	
	//$arquivo =      $_FILES['txtImg']['name'];
    $arquivo =  $_FILES['txtImg']['name'];


	if(empty($nome_prod) || empty($color) || empty($preco) || empty($qtd) || empty($detalhes) || $arquivo=="none"){
		
		if(empty($nome_prod)){
			echo("<script>alert('O campo nome é obrigatório.');
			window.location.href='cadProduto.php';
			document.getElementById('txtNome').focus();
			</script>");
		}else if(empty($color)){
			echo("<script>alert('A escolha da cor é obrigatória.');
			window.location.href='cadProduto.php';
			document.getElementById('txtCor').focus();
			</script>");
		}else if(empty($preco)){
			echo("<script>alert('O campo preço é obrigatório.');
			window.location.href='cadProduto.php';
			document.getElementById('txtPreco').focus();
			</script>");
			
		}else if(empty($qtd)){
			echo("<script>alert('A quantidade é obrigatória.');
			window.location.href='cadProduto.php';
			document.getElementById('txtQtd').focus();
			</script>");
			
		}else if(empty($detalhes)){
			echo("<script>alert('A quantidade é obrigatória.');
			window.location.href='cadProduto.php';
			document.getElementById('txtDetalhes').focus();
			</script>");
			
		}else if($arquivos=="none"){
			echo("<script>alert('A foto é obrigatória.');
			window.location.href='cadProduto.php';
			document.getElementById('txtImg').focus();
			</script>");
			
		}
		
	}else{
		
	require 'conexao.php';
	
	$stmt = $conn->prepare("INSERT INTO tbproduto(foto, nome_prod, cor, preco, quantidade, detalhes) VALUES (?,?,?,?,?,?)");
	$stmt ->bind_param("sssiis", $arquivo, $nome_prod, $color, $preco, $qtd, $detalhes);
	
	//pega o último id inserido no banco
	//$last_id = mysqli_insert_id($conn);
	
	//cria a pasta onde ficarão as imagens de produtos
    $_UP['pasta'] = '../img/Produtos/';
	
	// Coloca a foto em uma pasta diretorio
	mkdir($_UP['pasta'], 0777);
	move_uploaded_file($_FILES['txtImg']['tmp_name'], $_UP['pasta'].$arquivo);
	$stmt ->execute();
	
	echo "<script>
	alert('Produto cadastrado com sucesso.');
	window.location.href='cadProduto.php';
	</script>";
	
	$conn->close();
		
	}
	
?>