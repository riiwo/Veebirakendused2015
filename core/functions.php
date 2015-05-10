<?php
function logged_in(){
	if(isset($_SESSION['user_id'])){
		return true;
	} else {
		return false;
	}
}
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

function fb_check($id){
	$connection = dbConnect();
	$user_id = mysqli_query($connection, "select user_id from users where user_id ='$id'");
	$rows = mysqli_num_rows($user_id);
	if($rows==1){
		return true;
	} else {
		return false;
	}
}

function fb_register($id, $firstname, $lastname){
	$connection = dbConnect();
	$query = "insert into users (user_id, firstname, lastname) values ('$id','$firstname','$lastname')";
	$result = mysqli_query($connection,$query);
}

function user_data($user_id){
	$connection = dbConnect();
	$data = array();
	$user_id = (int)$user_id;

	$data = mysqli_fetch_assoc(mysqli_query($connection,"select * from users where user_id ='$user_id'"));
	return $data;
}
function show_errors($errors){
	return '<ul><li>'. implode('</li><li>', $errors) . '</li></ul>';
}
function register_user($register_data){
	$connection = dbConnect();
	$fields = '`' . implode('`, `',array_keys($register_data)) . '`';
	$data = '\'' . implode('\',\'', $register_data) . '\'';
	$query = "INSERT INTO `users` ($fields) VALUES ($data)";
	$result = mysqli_query($connection,$query);
}
?>