<?php
include('db/dbConfig.php')
$dbConnected = mysql_connect($server,$username,$password);
$dbSelected = mysql_select_db($databaseName,$dbConnected);
//kas andmebaasiga saab uhenduse?

if($dbConnected){
	echo "mysql uhendatud";
	if($dbSelected){
		echo "db connected";
	} else {
		echo "db connection faield";
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
		$query = mysql_query("select * from user where password='$password'
			and email='$email'",$dbConnected);
		$rows = mysql_num_rows($query);
		if($rows == 1){
			$_SESSION['login_user']=$email;
			header("location:home.php");
		} else {
			$error = "Email voi parool vale";
		}
		mysql_close($dbConnected);
	}
}
?>