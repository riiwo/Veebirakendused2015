<?php
session_start();
if(file_exists('functions/functions.php')){
	include 'functions/functions.php';
	header("location:index.php");
}

?>