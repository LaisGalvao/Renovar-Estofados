<?php

	require 'conexao.php';
	
	echo('<label for="selServ"class="orcLabel">Serviço:</label>
		<select name="selServ" class="inputOrc">
		<option name="0">----------</option>');
						
		$lista = mysqli_query($conn,"SELECT * FROM tbservico");
						
		while($serv = mysqli_fetch_assoc($lista)){
						
	
		echo('<option value='); echo($serv["Id"]) ;echo('>');
			echo($serv["Servico"]);
		echo('</option>');
					
		}
						
		echo('</select>');


?>