<?php
include_once ('init.php');

$page = intval($_GET['page']);

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
			$_SESSION['user_id'] = mysqli_fetch_assoc($user_login)['user_id'];
            header('location:../'.$page);
		}
	}
}

?>
