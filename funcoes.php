<?php
require 'conexao.php';

function insert($nome, $data_nasc, $cpf, $identidade)
{
    $query = "INSERT INTO clientes (nome, data_nasc, cpf, identidade) 
	VALUES ('$nome', '$data_nasc', '$cpf', '$identidade')";
	
    mysqli_query($conn, $query);
    return true;
    mysqli_close($conn);
}