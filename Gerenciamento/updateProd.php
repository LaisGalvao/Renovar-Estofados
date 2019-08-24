<?php

	require 'conexao.php';
	
	$id = htmlspecialchars($_POST['txtId']);
	$foto = htmlspecialchars($_POST['txtImg']);
	$nome_prod = htmlspecialchars($_POST['txtNome']);
	$color = htmlspecialchars($_POST['txtCor']);
	$preco = htmlspecialchars($_POST['txtValor']);
	$qtd = htmlspecialchars($_POST['txtQtd']);
	$detalhes = htmlspecialchars($_POST['txtDetelhes']);
	
	if(mysqli_query($conn, "UPDATE tbproduto SET foto='$foto', nome_prod='$nome_prod', cor='$color', preco='$preco',quantidade='$qtd',detalhes='$detalhes' WHERE Id_Produto='$id'")){
		
	
?>
<script type="text/javascript">

	alert("Produto atualizado com sucesso.");
	window.location.href='listarProd.php';
	
</script>
<?php
	}

?>