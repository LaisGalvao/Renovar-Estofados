<?php

	//as variáveis abaixo fazem a chamada das ações 
	//que serão necessárias para a conexão com o banco 
	$servidor = "localhost";
	$loginS = "id19780643_renovarestofados";
	$senhaS = "?IC{KgAlbB2=fS2{";
	$dbname = "id19780643_dbtapecaria";
	
	//a linha abaixo cria ums instância para ums nova conexão
	$conn = new mysqli($servidor, $loginS, $senhaS, $dbname);

	//a linha faz uma coparação, se há algum erro
	if($conn->connect_error){
		//a linha abaixo para no erro e mostra qual o motivo do erro
		die("Falha na conexão: ".$conn -> connect_error);
	}
	
	//echo ("<script>alert('Banco conectado');</script>");
	
	//a linha abaixo prossegue o sistema
	echo("". nl2br(PHP_EOL));
	
?>