<?php 

	require 'conexao.php';
	
	SESSION_START();
	
	if(!isset($_SESSION['Nome']) && !isset($_SESSION['Senha'])){
		
		header("location: sair.php");
		
		exit;
	}else{

?>
<!doctype html>
<html lang="PT-br">
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="css/estilo.css" media="all" />
		<title>Produtos</title>
	</head>
<body>
<div id="fundo">
<a href="telaHome.php">Voltar a home</a>
<a href="listarProd.php">Voltar a lista</a>
	<?php
	
		
		$codE = $_GET['codE'];
		
		$sql = mysqli_query($conn, "SELECT * FROM tbproduto WHERE Id_Produto='$codE'");
		$linha = mysqli_fetch_assoc($sql);
		
	?>
	
	<form action="updateProd.php" method="POST">
	<fieldset class="organizaCampos">
		
		<p>
			<label for="txtImg">Foto:</label>
			<input type="file" class="tamInput" id="txtImg" name="txtImg" />
		</p>
		
		<p>
			<input type="hidden" name="txtId" value="<?php echo $linha['Id_Produto'];?>" />
			<label for="txtNome">Nome:</label>
			<input class="tamInput" type="text" id="txtNome" name="txtNome" value="<?php echo $linha['nome_prod']; ?>" />
		</p>
		
		<p>
			<label for="txtCor">Cor:</label>
			<input class="tamInput" type="text" id="txtCor" name="txtCor" value="<?php echo $linha['cor']; ?>" />
		</p>
		
		<p>
			<label for="txtValor">Valor: R$</label>
			<input type="number" name="txtValor" id="txtValor" value="<?php echo $linha['preco']; ?>" class="tamInput"/>
		</p>
		
		<p>
			<label for="txtQtd">Quantidade:</label>
			<input type="number" id="txtQtd" name="txtQtd" value="<?php echo $linha['quantidade']; ?>" class="tamInput"/>
		</p>
		
		<p>
			<label for="txtQtd">Detalhes:</label>
			<input type="text" id="txtDetahes" name="txtDetahes" value="<?php echo $linha['detalhes']; ?>" class="tamInput"/>
		</p>
		
		
		<p>
			<input type="reset" value="Limpar campos" id="btnLimpar" class="botoes" />
			<input type="submit" name="btnCadastrar" id="btnCadastrar" value="Atualizar cadastro" class="botoes" />
		</p>
	</fieldset>
		
	</form>
	</div>
</body>
</html>
	<?php }?>