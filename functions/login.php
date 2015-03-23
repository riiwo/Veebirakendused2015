<?php
require 'core/init.php';

if(!empty($_POST)){
	$email = $_POST['email'];
	$password = $_POST['password'];
	if(empty($email) || empty($password)){
		echo "Emaili voi parooli vÄli on tühi ";
	}
	else if(!user_exists($email)){
		echo "antud kasutajat pole olemas ";
	}
	else {
		$user_login = user_login($email, $password);
		if(!$user_login){
			echo "parool voi email vale";
		} else {
			$_SESSION['user_id'] = $user_login;
			$_SESSION['email'] = $email;
			header("location:index.php");
		}
	}
}

?>