<?php
session_start();
include '../functions/functions.php';

if(isset($_SESSION['user_id'])){
	$session_id = $_SESSION['user_id'];
	echo $session_id;
}

?>