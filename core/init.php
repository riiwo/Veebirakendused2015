<?php
session_start();
if(file_exists('/functions/functions.php')){
	include '/functions/functions.php';
} else {
	header("location:home.php");
}

?>