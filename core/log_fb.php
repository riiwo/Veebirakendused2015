<?php
include_once ('init.php');
	$json = $_POST['data'];
	$array = json_decode($json, true);
	$firstname = $array['first_name'];
	$lastname = $array['last_name'];
	$id = $array['id'];
	fb_register($id, $firstname, $lastname);
	$_SESSION['user_id'] = $id;
	echo $id;
	//$check = fb_check($id);
	// if($check){
	// 	$_SESSION['user_id'] = $id;
	// 	echo $id;
	// } else {
	// 	fb_register($id, $firstname, $lastname);
	// 	$_SESSION['user_id'] = $id;
	// 	echo "1";
	// }
?>