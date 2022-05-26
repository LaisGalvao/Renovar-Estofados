<?php require 'conexao.php';
	$resultado = htmlspecialchars($_GET['txtPesquisar']);
	
	$busca = mysqli_query($conn, "SELECT * FROM tbproduto WHERE nome_prod LIKE '%".$resultado."%'");
	
	$dados = mysqli_num_rows($busca);
?>
</!DOCTYPE html>
<html lang="PT-br">
	<head>

		<meta charset="utf-8">
		<!-- Aqui entra a responsividade-->
		<meta name="viewport" content="width=device-width, initialz-scale=1" />
		<title>Renovar Estofados</title>

		<!--Aqui um mimo, icone da aba do navegador-->
		<link rel="icon" href="img/icone/ICONRenovarSofa.png"/>
		<link rel="stylesheet" href="css/stylegeral.css"/>
		<link rel="stylesheet" href="css/stylehome.css"/>

		<!-- Aqui usei google-font: Montserrat (Coloquei está, porque tem cara de gente fresca)-->	
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"/>

		<!--fONT AWESOME usei a versão para baixa-renda--> 
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous"/>

		<!--  AQUI COMEÇA O JQUERY AFFF-->
		<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>

	</head>
	<body>
		<!--Cabeçalho do Cliente-->
		<div class=" container AreaCliente bgBlack ">
				 <ul>
				 	<li><a href="cadastrar.html" ><i class="fab fa-wpforms"></i>Cadastrar</a></li>
				 	<li><a href="login.html"><i class="fas fa-user"></i>Login</a></li>
				 </ul>
		</div>

		<!--Cabeçalho-->
		<header class="container Cabeçalho Banner">
			<a href="index.html" class="logo"></a>
			<button  class="btnMenuRes bggradiente"><i class="fas fa-align-right"></i></button>


			<nav class="menu">
				<a href="#" class="btnClose"><i class="far fa-times-circle"></i></a>
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="loja.php">Loja</a></li>
					<li><a href="orcamento.html">Orçamento</a></li>
					<li><a href="contato.html">Contato</a></li>
					<label for="Log" class="Log"></label>
					<label for="LogA" class="LogA"></label>
				</ul>
			</nav>

		</header>
		<!--Fim Cabeçalho-->

		<!--Banner-->
		<div class=" container Banner">
				<div class="title">
					<h2> RENOVAR ESTOFADOS</h2>
					<h3>Sempre com os melhores estofados para uma casa de classe</h3>
				</div>

				<div class="botao">
				<form action="pesquisa.php" method="GET">
					<input type="search" class="searchBox" id="searchBox" name="txtPesquisar" placeholder="O que procura?" />
					<button class="btnBanner bgwhite btnCadastrar radius"><i class="fas fa-cart-plus"></i></button>
					</form>
				</div>
				
		</div>
		<!--Fim banner-->

		<!-- Aqui fica o conteúdo principal--> 
		<main class=" container ConteudoPrincipal">
		<?php 
		if($dados > 0){
		while($resultLoja = mysqli_fetch_assoc($busca)){ 
		?>
			<article class="produto bgwhite radius ">
				<img src="img/Produtos/<?php echo $resultLoja['foto'];?>" class="radius">
				<div class="texto">
					<h4><?php echo $resultLoja['nome_prod'];?></h4>
					<p> 
					<?php echo $resultLoja['detalhes']; ?>
					
					<!--aqui se iniciam as ações do carrinho e métodos de compra-->
					<!--foram usados campos do tipo hidden para mandar as informações para os scripts em php-->
					<form method="POST" action="compra.php">
					
					<input type="hidden" name="txtId" value="<?php echo $resultLoja['Id_Produto']; ?>"/>
					<input type="hidden" name="txtNome" value="<?php echo $resultLoja['nome_prod']; ?>"/>
					<input type="hidden" name="txtPreco" value="<?php echo $resultLoja['preco']; ?>"/>
					
					<i class="fas fa-cart-plus"></i><input type="submit" name="AddCarrinho" value="Comprar" />
					
					</form>
					</p>
				</div>
				
			</article>
		<?php 

				}
			}else{
		?>
		<script>
			alert("Produto não encontrado!");
			window.location.href="loja.php";
		</script>
		<?php
			}
		?>
		</main>
		<!--Fim do conteúdo principal-->

		<!-- Newslatter-->
		<section class=" container newslatter bgGray">

			<div class="title">
				<h1>Inscreva-se</h1>
				<h2>e receba as novidades em seu e-mail</h2>
			</div>

			<div class="form ">
				<form action="" type="post">
					<input type="e-mail" name="e-mail" class="radius" placeholder="E-mail">
					<input type="submit" name="" value="Cadastrar" class="radius btnNewslatter" >
				</form>
			<div>

		</section>
		<!--Fim Newslatter-->

		<!--Rodapé-->
		<footer class=" container rodape bggradiente">

			<div class="RedesSociais">
				<a href=""><i class="fab fa-facebook-f"></i></a>
				<a href=""><i class="fab fa-instagram"></i></a>
				<a href=""><i class="fab fa-twitter"></i></a>
				<a href=""><i class="fab fa-whatsapp"></i></a>
			</div>

			<p class="direitos"> Todos os direitos reservados a ZER01</p>
		</footer>
		<!--Fim Rodapé-->

		<!--JQUERY ação-->
		<script>

			$(document).ready(function(){
			
			$(".Log").load('valida.php');
			$(".LogA").load('validaA.php');
			$(".btnMenuRes").click(function(){
				$(".menu").show(200);
			});
			$(".btnClose").click(function(){
				$(".menu").hide(200);
			});
		});
		</script>
	</body>
</html>