<?php
session_start();


// initializing variables
$senha = "";
$email = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'cadastro');


  // LOGIN USER
if (isset($_POST['login_user'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $senha = mysqli_real_escape_string($db, $_POST['senha']);

  if (empty($email)) {
  	array_push($errors, "Usuário requerido");
  }
  if (empty($senha)) {
  	array_push($errors, "Senha requerida");
  }

  if (count($errors) == 0) {
  	$senha = md5($senha);
  	$query = "SELECT * FROM clientes WHERE email='$email' AND password='$senha'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	 //$_SESSION['email'] = $email;
  	   $_SESSION['success'] = "You are now logged in";
  	 header('Location: meuperfil.html');
	  echo "logado";
		

//echo "<script language='javascript' type='text/javascript'>alert//('Cadastro feito com ucesso,!', $senha);window.location.href='meuperfil.html'</script>";


  	}else {
  		array_push($errors, "Usuário e/ou senha não correspondem");
  	}
  }
}

?>