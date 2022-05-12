<?php
include ('funcoes.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$nome= $_POST["nome"];
//$foto = $_POST["foto"];
//$tamanho = $_FILES['foto']['size'];
//$tipo = $_FILES['foto']['type'];
//$nome_imagem = $_FILES['foto']['name'];
$data_nasc= $_POST["data_nasc"];
$cpf= $_POST["cpf"];
$identidade= $_POST["identidade"];
}

if (insert($nome, $data_nasc, $cpf, $identidade)) {
        header('location: meuperfil.html');
    } else {
        echo "Não foi possível realizar o cadastro";
        die;
    }


	/*$fp = fopen($imagem, "rb");
    $conteudo = fread($fp, $tamanho);
    $conteudo = addslashes($conteudo);
    fclose($fp);

	$query1 = "INSERT INTO clientes (nome, foto, data_nasc, cpf, identidade, orgao_exp, sexo, tel_contato, email, cep, estado, cidade, bairro, rua, num_casa, complemento, senha, user) 
	VALUES ('$nome', '$foto', '$data_nasc', '$cpf', '$identidade', '$orgao_exp', '$sexo', '$tel_contato', '$email', '$cep', '$estado', '$cidade', '$bairro', '$rua', '$num_casa', '$complemento', '$senha', '$user')";
	
	
	mysqli_query($conn,$query1);
	
	
	mysqli_close($conn);
		
		echo "<script language='javascript' type='text/javascript'>alert('Cadastro feito com sucesso,!', $senha);window.location.href='index.html'</script>";
		header('Location: meuperfil.html');

	*/	
 
