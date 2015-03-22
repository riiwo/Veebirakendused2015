<?php

function connectDb(){
	include('db/dbConfig.php');
	$connection = mysqli_connect($server,$username,$password);
	if($connection){
		return $connection;
	} else {
		die($connection);
	}
}

function registerUser () {
	$connection = connectDb();
	$dbSelected = mysqli_select_db($connection,'valimisA1VJdQomV');

	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	if(isset($email)){
		$query = mysqli_query($connection,"select * from user where email='$email'");		
		$rows = mysqli_num_rows($query);
		if($rows > 0){
			echo "Antud emailiga kasutaja on juba olemas";
		} else {
			$sql = "INSERT INTO user (firstname, lastname, email, password) 
			VALUES ('$firstname', '$lastname','$email','$password')";
			$connection->query($sql);
			echo "Kasutaja loomine onnestus";
			header("location:home.php");
		}
		
	}

	mysqli_close($connection);

}