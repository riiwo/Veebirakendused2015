<?php
include ('init.php');

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
    $register_data = array(
        'firstname' => $_POST['firstname'],
        'lastname'  => $_POST['lastname'],
        'email'     => $_POST['email'],
        'password'  => $_POST['password']
        );
    register_user($register_data);
    $user_login = user_login($email, $password);
    $_SESSION['user_id'] = mysqli_fetch_assoc($user_login)['user_id'];

    echo "3";
}