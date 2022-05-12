<?php
session_start();
include('conexao.php');



$email = mysqli_real_escape_string($conn, $_POST['email']);
$senhaa = mysqli_real_escape_string($conn, $_POST['senha']);

if (empty($_POST['email']) ||  empty($_POST['senha'])) {
	header('Location: login.html');
	exit();
}
$query ="SELECT * FROM clientes WHERE email = '$email' AND senha = '$senhaa'";

$result = mysqli_query($conn, $query);

$row = mysqli_num_rows($result);

if($row == 1){
	$_SESSION['email'] = $email; 
	header('Location: meuperfil.html');
	exit();
} else{
	header('Location: index.html');
	exit();
}
?>