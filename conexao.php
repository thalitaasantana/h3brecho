<?php
header('Content-Type: text/html; charset=utf-8');
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "cadastro";

//criar conexão
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
mysqli_set_charset($conn,'utf8');
if(!$conn){

	die("erro de conexao->".mysqli_error());
}

?>