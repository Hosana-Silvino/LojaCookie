<?php
	header("Location: loja.php");

	$nome = $_POST['eletronicosSelect'];
   
	setcookie('selectCookie',$nome, time()+60);// 1 minuto
	// setcookie('corCookie',$cor, time()+(60*60*24*10));
	/*
		60 - 1 minuto
		*60 - 1 hora
		*24 - 1 dia
		*10 - 10 dias
	*/

 
  



?>
