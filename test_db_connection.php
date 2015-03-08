<?php
// Database=valimised;
// Data Source=eu-cdbr-azure-north-c.cloudapp.net;
// User Id=b598995b5aa182;
// Password=3fef7f46;

$server = "eu-cdbr-azure-north-c.cloudapp.net";
$username ="b598995b5aa182";
$password="3fef7f46";
$databaseName = "valimised";

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
