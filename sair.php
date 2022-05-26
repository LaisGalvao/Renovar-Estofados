<?php

	SESSION_START();
	SESSION_DESTROY();
	
	//se der um header ele dá errado, duplica a página.
	//header("location: index.html");

	echo "<script>window.location.href='login.html';</script>";
	
?>