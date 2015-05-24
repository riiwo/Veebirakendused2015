<?php
function logged_in(){
	if(isset($_SESSION['user_id'])){
		return true;
	} else {
		return false;
	}
}
function dbConnect(){
	$server = "eu-cdbr-azure-north-b.cloudapp.net";
	$username ="b065e66df3ffd8";
	$password="253cb2ae";
	$databaseName = "valimisA1VJdQomV";
	return $connection =  mysqli_connect($server,$username,$password,$databaseName);
}
function user_exists($email){
	$connection = dbConnect();
	$query = mysqli_query($connection,"select * from users where email ='$email'");
	$rows = mysqli_num_rows($query);
	if($rows==1){
		return true;
	} else {
		return false;
	}
}
function user_login($email, $password){
	$connection = dbConnect();
	$user_id = mysqli_query($connection,"select user_id from users where email ='$email' and password ='$password'");
	$rows = mysqli_num_rows($user_id);
	if($rows==1){
		return $user_id;
	} else {
		return false;
	}
}

function fb_check($id){
	$connection = dbConnect();
	$user_id = mysqli_query($connection, "select user_id from users where user_id ='$id'");
	$rows = mysqli_num_rows($user_id);
	if($rows==1){
		return true;
	} else {
		return false;
	}
}

function fb_register($id, $firstname, $lastname){
	$connection = dbConnect();
	$query = "insert into users (user_id, firstname, lastname) values ('$id','$firstname','$lastname')";
	$result = mysqli_query($connection,$query);
}

function user_data($user_id){
	$connection = dbConnect();
	$data = array();
	$user_id = (int)$user_id;
	$data = mysqli_fetch_assoc(mysqli_query($connection,"select * from users where user_id ='$user_id'"));
	return $data;
}
function show_errors($errors){
	return '<ul><li>'. implode('</li><li>', $errors) . '</li></ul>';
}
function register_user($register_data){
	$connection = dbConnect();
	$fields = '`' . implode('`, `',array_keys($register_data)) . '`';
	$data = '\'' . implode('\',\'', $register_data) . '\'';
	$query = "INSERT INTO `users` ($fields) VALUES ($data)";
	$result = mysqli_query($connection,$query);
}

function get_candidates(){
	$connection = dbConnect();
	$query = ("SELECT 
    users.firstname,
    users.lastname,
    erakond.nimi,
    ringkond.Piirkond
	FROM
    kandidaat
        JOIN
    users ON kandidaat.userid = users.user_id
		JOIN
	erakond on kandidaat.erakondid = erakond.id
		JOIN
	ringkond on kandidaat.ringkondid = ringkond.PiirkondID
");
	$data = mysqli_query($connection,$query);
	return $data;
}

function otsi(){
	var otsing = doucment.getElementById("otsing").value;
	var tabel = document.getElementById("k-tabel");
	var read;
	for(var rea_nr = 0; rea_nr < tabel.rows.length; rea_nr++){
		var rida = '';
		if(rea_nr===0){
			read = tabel.rows.item(i).cells.length;
			continue;
		}
		for(var veeru_nr = 0; veeru_nr < read; veeru_nr++){
			var data = '';
			if(navigator.appName=='Microsoft Internet Explorer') {
				data = tabel.rows.item(rea_nr).cells.item(veeru_nr).innertext;
			} else {
				data = tabel.rows.item(rea_nr).cells.item(veeru_nr).textContent;
			}
			rida += data;
		}
		rida = rida.toLowerCase();
		otsing = otsing.toLowerCase();
		if(rida.indexOf(otsing)== -1){
			tabel.rows.item(rea_nr).style.display = 'none';
		} else {
			tabel.rows.item(rea_nr).style.display = 'table-row';
		}
	}
}
?>