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
		
		<title>Cadastro de usuário</title>

		<link rel="icon" href="../img/icone/ICONRenovarSofa.png"/>
		<link rel="stylesheet" href="css/stylegeral.css"/>
</head>
<body>

	<!--CABEÇALHO-->
	<div class=" container AreaCliente bgBlack ">

			<a href="sair.php">Sair</a>
			<a href="telaHome.php">Voltar a home</a>
	</div>

	<!--Banner-->
		<div class=" container banner ajuste">
				<div class="title">
					<h2><I>Cadastro de usuário Renovar</I></h2>
				</div>		
		</div>
	<!--Fim banner-->

	<!--Tela cadastro de usuário-->
	<main class=" container user bgwhite ">

		<form action="cadastrarUsuario.php" method="post">
		
			<label for="txtNome">Nome:</label>
			<input class="tamInput" type="text" id="txtNome" name="txtNome" placeholder="Nome de usuário" />
	
			<label for="txtLogin">Login:</label>
			<input type="text" id="txtLogin" name="txtLogin" placeholder="Ex:exemplo@exemplo.com" class="tamInput"/>
	
			<label for="txtSenha">Senha:</label>
			<input type="password" id="txtSenha" name="txtSenha" placeholder="Sua senha" class="tamInput"/>
	
			<input type="submit" name="btnCadastrar" id="btnCadastrar" value="Cadastrar usuário" class="botoes" />
			<input type="reset" value="Limpar campos" id="btnLimpar" class="botoes" />
		
		</form>

	</main>

</body>
</html>
	<?php }?>