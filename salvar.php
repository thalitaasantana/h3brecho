<?php
require ('conexao.php');

$nome_produto= $_POST["nome_produto"];
$fotoprincipal = $_FILES['fotoprincipal']['tmp_name'];
$tamanhofotoprincipal = $_FILES['fotoprincipal']['size'];
$tipofotoprincipal = $_FILES['fotoprincipal']['type'];
$nome_fotoprincipal = $_FILES['fotoprincipal']['name'];

$foto2 = $_FILES['foto2']['tmp_name'];
$tamanhofoto2 = $_FILES['foto2']['size'];
$tipofoto2 = $_FILES['foto2']['type'];
$nome_foto2 = $_FILES['foto2']['name'];

$foto3 = $_FILES['foto3']['tmp_name'];
$tamanho3 = $_FILES['foto3']['size'];
$tipo3 = $_FILES['foto3']['type'];
$nome_foto3 = $_FILES['foto3']['name'];


$categoria= $_POST["categoria"];
$condicao= $_POST["condicao"];
$descricao= $_POST["descricao"];
$marca= $_POST["marca"];
$valor= $_POST["valor"];



	$fp1 = fopen($fotoprincipal, "rb");
    $conteudo1 = fread($fp1, $tamanhofotoprincipal);
    $conteudo1 = addslashes($conteudo1);
    fclose($fp1);

    $fp2 = fopen($foto2, "rb");
    $conteudo2 = fread($fp2, $tamanhofoto2);
    $conteudo2 = addslashes($conteudo2);
    fclose($fp2);

    $fp3 = fopen($foto3, "rb");
    $conteudo3 = fread($fp3, $tamanhofoto3);
    $conteudo3 = addslashes($conteudo3);
    fclose($fp3);
	    
	    


	$query2 = "INSERT INTO produtos (nome_produto, fotoprincipal, tamanhofotoprincipal, tipofotoprincipal, nome_fotoprincipal, foto2, tamanhofoto2, tipofoto2, nome_foto2, foto3, tamanhofoto3, tipofoto3, nome_foto3, categoria, condicao, descricao, marca, valor) 
	VALUES ('$nome_produto', '$fotoprincipal', '$tamanhofotoprincipal', '$tipofotoprincipal', '$nome_fotoprincipal', '$foto2', '$tamanhofoto2', '$tipofoto2', '$nome_foto2', '$foto3', '$tamanhofoto3', '$tipofoto3', '$nome_foto3', '$categoria', '$condicao', '$descricao', '$marca', '$valor')";
	
	
	mysqli_query($conn,$query2);
	
	
	mysqli_close($conn);
		
		echo "<script language='javascript' type='text/javascript'>alert('Cadastro feito com sucesso,!', $senha);window.location.href='index.html'</script>";
		header('Location: meuperfil.html');

		
?> 


