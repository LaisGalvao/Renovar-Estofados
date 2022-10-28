<?php 

	require 'conexao.php';
	
	SESSION_START();
	
	if(!isset($_SESSION['Nome']) && !isset($_SESSION['Senha'])){
		
		echo "<script>window.location.href='sair.php';</script>";
		
		exit;
	
	}else{
		$user= $_SESSION['Nome'];
		
			echo "<label class='userLog'>Bem vindo(a):".$user."</label><p><a href='sair.php'>Sair</a></p>";

?>
<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<!-- Aqui entra a responsividade-->
		<meta name="viewport" content="width=device-width, initialz-scale=1" />
		
		<title>Produtos</title>

		<link rel="icon" href="../img/icone/ICONRenovarSofa.png"/>
		<link rel="stylesheet" href="css/stylegeral.css"/>
</head>
<body>

		<div class=" container AreaCliente bgBlack ">
			<a href="sair.php">Sair</a>
			<a href="telaHome.php">Voltar a home</a>
		</div>

	<!--Banner-->
		<div class=" container banner ajuste">
				<div class="title">
					<h2><I>Cadastro de Produtos Renovar</I></h2>
				</div>		
		</div>
	<!--Fim banner-->


		<!--Tela Cadastro de produto-->
		<main class=" container produto bgwhite ">

			<form action="cadastrarProduto.php" method="post" enctype="multipart/form-data">

				<label for="txtImg">Foto: </label>
				<input type="file" class="tamInput" id="txtImg" name="txtImg" value="Escolha uma imagem">

				<label for="txtNome">Nome:</label>
				<input class="tamInput" type="text" id="txtNome" name="txtNome" placeholder="Nome do produto" />
		
				<label for="txtQtd">Cor:</label>
				<input type="text" id="txtCor" name="txtCor" placeholder="Cor do produto" class="tamInput"/>
		
				<label for="txtValor">Preço: R$</label>
				<input type="number" name="txtPreco" id="txtPreco" placeholder="0.000,00" class="tamInput"/>
		
				<label for="txtQtd">Quantidade:</label>
				<input type="number" id="txtQtd" name="txtQtd" placeholder="000" class="tamInput"/>
		
				<label for="txtQtd">Detalhes:</label>
				<input type="text" id="txtDetalhes" name="txtDetalhes" class="tamInput"/>
		
				<input type="reset" value="Limpar campos" id="btnLimpar" class="botoes"/>
				<input type="submit" name="btnCadastrar" id="btnCadastrar" value="Cadastrar produtos" class="botoes" />

			</form>
		</main>
</body>
</html>
	<?php }?>