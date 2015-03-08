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
