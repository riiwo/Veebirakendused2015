<?php
$selected = isset($_GET['ringkond']);
if($selected){
	$data = tulemused_piirkond($selected);
	return $data;
}

function tulemused_piirkond($piirkond){
	connection = dbConnect();
	$query("SELECT users.firstname,users.lastname,erakond.nimi,COUNT(haaletustulemus.kandidateid) AS votes from haaletustulemus
		JOIN kandidaat on haaletustulemus.kandidateid = kandidaat.userid
		JOIN erakond on kandidaat.erakondid = erakond.id
        JOIN ringkond on kandidaat.ringkondid = ringkond.PiirkondID
        JOIN users on kandidaat.userid = users.user_id
        WHERE ringkond.Piirkond = '$piirkond'
		GROUP BY erakond.nimi");
	$data = mysqli_query($connection,$query);
}

?>