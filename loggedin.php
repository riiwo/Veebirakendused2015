<?php
if(logged_in()===true){
    
    $session_id = $_SESSION['user_id'];
    $user_data = user_data($session_id);
	echo $user_data['firstname'];
}
?>