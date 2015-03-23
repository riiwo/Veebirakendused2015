<?php
session_start();
if(file_exists('D:/home/site/wwwroot/functions/functions.php')){
	include '/functions/functions.php';
} else {
	header("location:home.php");
}

?>