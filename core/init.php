<?php
session_start();
include '../functions/functions.php';

if (logged_in()===true){
	$session_id = $_SESSION['user_id'];
	// $user_data = user_data($session_id);
}
?>