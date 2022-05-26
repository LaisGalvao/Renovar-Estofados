<?php
session_start();
if(isset($_SESSION['login'])){
		
	//pegando os valores dos meus inputs hidden da loja
	$cli = $_SESSION['login'];
	$id = $_POST['txtId']; 
	$nome_prod = $_POST['txtNome'];  
	$preco = $_POST['txtPreco']; 

	if(isset($_POST['txtId'])){
	require 'conexao.php';
	$stmt = $conn->prepare("INSERT INTO tbcompra(cliente, produto, preco) VALUES (?,?,?)");
	$stmt ->bind_param("ssd", $cli, $nome_prod, $preco);
	$stmt ->execute();	
	echo "<script>
	alert('COMPRA FINALIZADA.');
	window.location.href='loja.php';
	</script>";
	
	$conn->close();
	
	}else{
		
		echo 'Ocorreu um erro.';
	}
	
}else{
	
	echo 'não podemos finalizar.';
	
}
?>