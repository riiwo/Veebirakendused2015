<?php
include ('init.php');

if(isset($_POST['email'])=== true && empty($_POST['email'])===false){
    if(user_exists($_POST['email'])===true){
        echo 'Sisestatud emailiga \'' . $_POST['email'] . '\' kasutaja on juba olemas.';
    }
}

if(isset($_POST['password'])=== true && empty($_POST['password'])===false && isset($_POST['password_check'])=== true && empty($_POST['password_check'])===false){
    if($_POST['password']!==$_POST['password_check']){
        echo "Sisestatud paroolid ei klapi";
    }
}

if(isset($_POST['email'])=== true && empty($_POST['email'])===false && isset($_POST['password'])=== true && empty($_POST['password'])===false && isset($_POST['firstname'])=== true && empty($_POST['firstname'])===false
    && isset($_POST['lastname'])=== true && empty($_POST['lastname'])===false){
    $register_data = array(
        'firstname' => $_POST['firstname'],
        'lastname'  => $_POST['lastname'],
        'email'     => $_POST['email'],
        'password'  => $_POST['password']
        );
    register_user($register_data);
}
?>