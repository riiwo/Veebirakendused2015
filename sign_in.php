<?php
include('db/dbConfig.php');
$dbConnected = mysqli_connect($server,$username,$password);
$dbSelected = mysqli_select_db($dbConnected,$databaseName);
//kas andmebaasiga saab uhenduse?

if($dbConnected){
	//echo "mysql uhendatud";
	if($dbSelected){
		//echo "db connected";
	} else {
		//echo "db connection faield";
	}
} else {
	echo "mysql connection faield";
}

session_start();
$error ="";
if(isset($_POST['submit'])){
	if(empty($_POST['email']) || empty($_POST['password'])){
		$error="E-mail voi parool on vale";
	}
	else
	{
		$email = $_POST['email'];
		$password = $_POST['password'];
		$query = mysqli_query($dbConnected,"select * from user where password='$password'
			and email='$email'");
		$rows = mysqli_num_rows($query);
		if($rows == 1){
			$_SESSION['login_user']=$email;
			$_SESSION['logged'] = true;
			header("location:home.php");
		} else {
			$error = "Email voi parool vale";
		}
		mysqli_close($dbConnected);
	}
}
?>
