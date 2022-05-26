<html>
<head>
	<title>Carrinho</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous"/>
</head>
<body>
<?php
require'conexao.php';
if(isset($_POST['txtId'])){
	
	//pegando os valores dos meus inputs hidden da loja
	$id = $_POST['txtId']; 
	$nome_prod = $_POST['txtNome']; 
	$cor = $_POST['txtCor']; 
	$preco = $_POST['txtPreco']; 
	$quantidade = $_POST['txtQtd']; 
	$detalhes = $_POST['txtDetalhes']; 
	
	
	//criando o vetor do meu carrinho
	$compra[] = array(
	
	'id' => $id,
	'nome' => $nome_prod,
	'cor' => $cor,
	'preco' => $preco,
	'quantidade' => $quantidade,
	'detalhes' => $detalhes
	);
	
	//iniciando minha sessão onde será armazenados os dados dos produtos selecionados
	session_start();
	if(isset($_SESSION['meuCarrinho'])){
	$carrinho = $_SESSION['meuCarrinho'];
	if(isset($_POST['txtId'])){
	$id = $_POST['txtId']; 
	$nome_prod = $_POST['txtNome']; 
	$cor = $_POST['txtCor']; 
	$preco = $_POST['txtPreco']; 
	$quantidade = $_POST['txtQtd']; 
	$detalhes = $_POST['txtDetalhes']; 
	}
	}

	//as linhas abaixo adicionam o número de produtos no carrinho, 
	//de forma que produtos iguais não recebam uma nova linha na tabela
	$posicao = -1;
	for($i=0; $i<count($carrinho); $i++){
		if($id == $carrinho[$i]['id']){
			$posicao = $i;
			
		}
	}
	
	if($posicao <> -1){
		//para adicionar novos produtos na posição de quantidade do array
		$qtd = $carrinho[$posicao]['quantidade']+ $quantidade;
		$carrinho[$posicao] = array(
	
		'id' => $id,
		'nome' => $nome_prod,
		'cor' => $cor,
		'preco' => $preco,
		'quantidade' => $qtd,
		'detalhes' => $detalhes
		);
		
	}else{
		//nessa condição, se não houverem produtos a mais adicionados
		//ele mantém o primeiro array
		$carrinho[] = array(
	
		'id' => $id,
		'nome' => $nome_prod,
		'cor' => $cor,
		'preco' => $preco,
		'quantidade' => $quantidade,
		'detalhes' => $detalhes
		);
		
	}		
	

//para adicionar novos produtos ao recarregar a página
	if(isset($_POST['id2'])){
		$ind = $_POST['id2'];
		$qtd = $_POST['quantidade2']; 
		$carrinho[$ind]['quantidade'] = $qtd;

	}	
	
	//para excluir todos os produtos pelo próprio carrinho
	if(isset($_POST['id4'])){
	
		$ind = $_POST['id4'];
		$carrinho[$ind] = null;
	}


//se não existir a sessão carrinho, ele cria um novo, vazio
//Exemplo: quando eu volto pra loja, e tento acessar a página carrinho sem ter selecionado nada,
//ele cria uma nova sessão zerada e sem produtos
if(isset($carrinho))$_SESSION['meuCarrinho'] = $carrinho;
}
?>

<div>
<a href="loja.php">Voltar</a>

<table border="1">
							
		<tr>
			<th class="titulotabela" >Descrição</th>
		    <th class="titulotabela">Cor</th>
		    <th class="titulotabela">Quantidade</th>
			<th class="titulotabela">Valor Unitário</th>
			<th class="titulotabela">Subtotal</th>
			<th class="titulotabela">Ações</th>
		</tr>
		
		
<?php  
	if(isset($carrinho)){
		
		$total = 0;
		$i = 0;
		for($i<0; $i<count($carrinho); $i++){

?>		
		<tr>
		<form name="Atualizar" method="POST">
			<td><?php echo $carrinho[$i]['nome']?></td>							
			<td><?php echo $carrinho[$i]['cor']?></td>				
			<input type="hidden" name="id2" value="<?php echo $i; ?>">
			
			<td><button type="submit"><i class="fas fa-plus"></i></button><input type="text" name="quantidade2" value="<?php echo $carrinho[$i]['quantidade'];?>">
			</td>			
		    <td>R$:<?php echo $carrinho[$i]['preco']?></td>
			<!--cálculo do subtotal de produtos-->
			<?php $subtotal = $carrinho[$i]['preco']*$carrinho[$i]['quantidade'];
			$total= $total + $subtotal; 
			
			?>
			<td>R$:<?php echo $subtotal; ?></td>
			<form/>
			<!--botões com as ações do carrinho: excluir ou add um produto-->
			
			<form action="" method="POST">
			
			<input type="hidden" name="id4" value="<?php echo $i; ?>">
			<td><button type="submit"><i class="fas fa-minus"></i></button></td>
			</form>
			</tr>
			<?php 	}
			}?>
						
		<tr>
		<!--preço total de produtos-->
			<td>Total: R$: <?php if(isset($total))echo $total; ?></td>
		</tr>
		<input type="submit" class="comprar" id="comprar" name="btnComprar" value="Comprar" />
</div>
</body>
</html>