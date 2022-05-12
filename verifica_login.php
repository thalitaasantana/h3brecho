<?php
session_start();
if(!$_SESSION['email']{

	header('index.html');
	exit();
}
?>