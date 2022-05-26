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
		
		<title>Administração</title>

		<link rel="icon" href="../img/icone/ICONRenovarSofa.png"/>
		<link rel="stylesheet" href="css/stylegeral.css"/>
</head>
<body>
	<div class=" container AreaCliente bgBlack ">
		
	</div>

	<!--Banner-->
		<div class=" container banner ajuste">
				<div class="title">
					<h2><I>Bem-vindo a área administrativa Renovar</I></h2>
				</div>		
		</div>
	<!--Fim banner-->

		<!--INFERNOOOOO tela home-->
		<main class=" container home bgwhite ">

			<div class=" radius ">

				<article class="bloco bgwhite radius">
					<a href="listarProd.php">
					<label for="listarProd">Lista de Estoque</label>
					</a>
				</article>

				<article class="bloco bgwhite radius">
					<a href="cadProduto.php">
					<label for="cadProduto">Cadastro de produtos</label>
					</a>
				</article>

				<article class="bloco bgwhite radius">
					<a href="cadUser.php">
					<label for="cadUSer">Cadastrar funcionários</label>
					</a>
				</article>

				<article class="bloco bgwhite radius" >
					<a href="../index.html">
					<label for="sair"> Voltar ao Site</label>
					</a>
				</article>

				<article class="bloco bgwhite radius">
					<a href="sair.php">
					<label for="sair"> Sair</label>
					</a>
				</article>
			</div>
		</main>
		<!--Fim da tela home-->
</body>
</html>
	<?php }?>