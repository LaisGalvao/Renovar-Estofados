<?php
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
		
		<title>Lista de Produtos</title>

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
					<h2><I>Lista de produtos Renovar</I></h2>
				</div>		
		</div>
	<!--Fim banner-->

	<!--Tela Lista--> 
	
	<main class=" container lista bgwhite ">

		<form method="post" action="buscarProd.php">
		
			<input type="search" name="txtBusca" class="tamInput" />
			<input type="submit" value="Buscar" name="btnBusca" id="btnBusca" class="botoes" />
		
		</form>


		<table border="1" id="tbProd">
		<tr>
			<th>Foto</th>
			<th>Produto</th>
			<th>Cor</th>
			<th>Preço</th>
			<th>Quantidade</th>
			<th>Detalhes</th>
			<th colspan="2">Status</th>
		</tr>

			<?php
			
				require 'conexao.php';
			$query = mysqli_query($conn, "SELECT * FROM tbproduto");
			while($linha = mysqli_fetch_assoc($query)){
			
			?>

		<tr>
				<td>
				<?php echo $linha['foto'];?>
				</td>
				
				<td>
				<?php echo $linha['nome_prod'];?>
				</td>
				
				<td>
				<?php echo $linha['cor'];?>
				</td>
				
				<td>
				<?php echo "R$ ". $linha['preco'];?>
				</td>
				
				<td>
				<?php echo $linha['quantidade'];?>
				</td>
			
				<td>
				<?php echo $linha['detalhes'];?>
				</td>
	
				<td>
					<a href="editarProd.php?codE=<?php echo $linha['Id_Produto'];?>">Editar</a>
				</td>
				
				<td>
					<a href="excluirProd.php?codEx=<?php echo $linha['Id_Produto'];?>" onclick="return confirm('Deseja deletar o produto?')">Excluir</a>
				</td>
				<?php } ?>
		</tr>
	</main>

</body>
</html>
	<?php }?>