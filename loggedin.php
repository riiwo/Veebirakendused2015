<?php
if(logged_in()===true){
	$session_id = $_SESSION['user_id'];
	echo $user_data['firstname'];
}
?>