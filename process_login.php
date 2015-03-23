<?php
include_once 'db/dbConnect.php';
include_once 'functions.php';
 
session_start(); // Our custom secure way of starting a PHP session.
 
if (isset($_POST['email']) {
    $email = $_POST['email'];
    $password = $_POST['password']; // The hashed password.
 
    if (login($email, $password, $mysqli) == true) {
        // Login success 
        header('home.php');
    } else {
      echo "Ei loginud sisse";
    }
} else {
    // The correct POST variables were not sent to this page. 
    echo 'Invalid Request';
}