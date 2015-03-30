<?php
session_start();
include '../functions/functions.php';
if(logged_in()===true){
	echo "tootab";
}
?>