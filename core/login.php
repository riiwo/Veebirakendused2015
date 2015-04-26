<?php
include_once ('init.php');
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page= "" ;
}
	$email = $_POST['email'];
	$password = $_POST['password'];

	$email = filter_var($email, FILTER_SANITIZE_EMAIL);

	if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		echo "0";
	}

	else if(!user_exists($email)){
		echo "1";
	}
	else {
		$user_login = user_login($email, $password);
		if(!$user_login){
			echo "2";
		} else {
			$_SESSION['user_id'] = mysqli_fetch_assoc($user_login)['user_id'];
            if ($page!="") {
                echo($page)
            }
		}
	}

?>
