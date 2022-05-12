<?php
require ('conexao.php');

$nome_contato= $_POST["nome_contato"];
$email_contato= $_POST["email_contato"];
$mensagem_contato= $_POST["mensagem_contato"];


	$query3 = "INSERT INTO contato (nome_contato, email_contato, mensagem_contato) 
	VALUES ('$nome_contato', '$email_contato', '$mensagem_contato')";
	
	
	mysqli_query($conn,$query3);
	
	
	mysqli_close($conn);
		
		echo "<script language='javascript' type='text/javascript'>alert('Mensagem enviada com sucesso!');window.location.href='index.html'</script>";
		header('Location: index.html');

		
?> 

