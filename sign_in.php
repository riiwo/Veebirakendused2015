<?php

include "functions.php";

$dbConnect = connectDb();
$dbSelected = mysqli_select_db($dbConnect,'valimisA1VJdQomV');

if(isset($_POST['submit'])){
	if(empty($_POST['email']) || empty($_POST['password'])){
		echo "Emaili või parooli väli on tühi.";
	}
	else
	{
		$email = $_POST['email'];
		$password = $_POST['password'];
		$query = mysqli_query($dbConnect,"select * from user where password='$password'
			and email='$email'");

		$rows = mysqli_num_rows($query);
		if($rows == 1){
			$_SESSION['email']=$email;
			$_SESSION['login'] = true;
			header("location:home.php");
			echo "sisse logimine onnestus";
		} else {
			echo "Sisetatud parool või email on vale";
		}
		mysqli_close($dbConnect);
	}
}
?>
