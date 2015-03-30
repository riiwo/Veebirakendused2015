<?php
function dbConnect(){
	$server = "eu-cdbr-azure-north-b.cloudapp.net";
	$username ="b065e66df3ffd8";
	$password="253cb2ae";
	$databaseName = "valimisA1VJdQomV";
	return $connection =  mysqli_connect($server,$username,$password,$databaseName);
}

function user_exists($email){
	$connection = dbConnect();
	$query = mysqli_query($connection,"select * from users where email ='$email'");
	$rows = mysqli_num_rows($query);
	if($rows==1){
		return true;
	} else {
		return false;
	}
}

function user_login($email, $password){
	$connection = dbConnect();
	$user_id = mysqli_query($connection,"select user_id from users where email ='$email' and password ='$password'");
	$rows = mysqli_num_rows($user_id);
	if($rows==1){
		return $user_id;
	} else {
		return false;
	}
}

function user_data($user_id){
	$data = array();
	$connection = dbConnect();
	$data = mysqli_query($connection, "select user_id, email, password, firstname, lastname from users where user_id='$user_id");
	return $data;
}

function logged_in(){
	if(isset($_SESSION['user_id'])){
		return true;
	}
}
?>