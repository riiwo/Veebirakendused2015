<?php
include('db/dbConnect.php');
$dbConnected = mysqli_connect($server,$username,$password);
$dbSelected = mysqli_select_db($dbConnected,$databaseName);
//kas andmebaasiga saab uhenduse?

if($mysgli){
	//echo "mysql uhendatud";
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
		$query = mysqli_query($mysgli,"select * from user where password='$password'
			and email='$email'");
		$rows = mysqli_num_rows($query);
		if($rows == 1){
			$_SESSION['login_user']=$email;
			$_SESSION['logged'] = true;
			header("location:home.php");
		} else {
			$error = "Email voi parool vale";
		}
		mysqli_close($mysgli);
	}
}
?>
