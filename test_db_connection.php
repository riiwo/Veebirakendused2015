<?php

// Database=valimisA1VJdQomV;
// Data Source=eu-cdbr-azure-north-b.cloudapp.net;
// User Id=b065e66df3ffd8;
// Password=253cb2ae
 
try {
    $conn = new PDO ( "sqlsrv:server = tcp:eu-cdbr-azure-north-b.cloudapp.net; Database = valimisA1VJdQomV", "b065e66df3ffd8", "253cb2ae");
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
catch ( PDOException $e ) {
    print( "Error connecting to SQL Server." );
    die(print_r($e));
}
if($conn){
	echo "MySQL connected";
}
else {
	echo "MySQL connection failed";
}
// SQL Server Extension Sample Code:
 
$connectionInfo = array("UID" => "valimisA1VJdQomV", "pwd" => "253cb2ae", "Database" => "valimisA1VJdQomV", "LoginTimeout" => 30, "Encrypt" => 1);
$serverName = "eu-cdbr-azure-north-b.cloudapp.net";
$conn = sqlsrv_connect($serverName, $connectionInfo);
?>