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
$dbSelected = mysql_select_db($databaseName,$dbConnected);

if($dbConnected){
	echo "mysql uhendatud";
	if($dbSelected){
		echo "db connected";
	} else {
		echo "db connection faield";
	}
} else {
	echo "mysql connection faield";
}
?>