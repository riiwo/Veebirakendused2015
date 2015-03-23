<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("eu-cdbr-azure-north-b.cloudapp.net", "b065e66df3ffd8", "253cb2ae");
// Selecting Database
$db = mysqli_select_db($connection,"valimisA1VJdQomV");
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysqli_query($connection,"select email from user where email='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['email'];
if(!isset($login_session)){
mysqli_close($connection); // Closing Connection
header('Location: index.php'); // Redirecting To Home Page
}
?>