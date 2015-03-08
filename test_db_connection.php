<?php

// Database=valimisA1VJdQomV;
// Data Source=eu-cdbr-azure-north-b.cloudapp.net;
// User Id=b065e66df3ffd8;
// Password=253cb2ae
$server = "eu-cdbr-azure-north-b.cloudapp.net";
$username ="b065e66df3ffd8";
$password="253cb2ae";
$databaseName = "valimisA1VJdQomV";

$dbConnected = mysql_connect($server,$username,$password);
$dbSelected = mysql_connect($databaseName,$dbConnected);

if($dbConnected){
	echo "mysql uhendatud <br/>";
	if($dbSelected){
		echo "db connected <br/>";
	} else {
		echo "db connection failed <br/>";
	}
} else {
	echo "mysql connection failed  <br/>";
}
?>
