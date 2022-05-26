<?php

	require 'conexao.php';
	
	$codEx = htmlspecialchars($_GET['codEx']);
	
	mysqli_query($conn, "DELETE FROM tbproduto WHERE Id_Produto='$codEx'");

?>

<script type="text/javascript">
	alert("Produto excluído com sucesso.");
	window.location.href='listarProd.php';
</script>