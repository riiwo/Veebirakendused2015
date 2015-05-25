<?php
include ('init.php');
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$password = $_POST['password'];
$password_check  = $_POST['password_check'];

if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo "0";
} 

else if(user_exists($email)){
    echo "1";
}  

else if ($password !== $password_check){
    echo "2";
}
else {
    register_user($firstname, $lastname, $email, $password);
    echo "3";
}