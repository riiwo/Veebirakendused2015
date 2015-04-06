<?php
include_once 'init.php'; 
$link = dbConnect();
$a = intval($_GET['a']);
$b = intval($_GET['b']);
$c = intval($_GET['c']);
date_default_timezone_get();
$d = time();
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$query = "SELECT COUNT(*) as num FROM haaletustulemus WHERE userid = '$a'";
$result = mysqli_query($link, $query);
while($data=mysqli_fetch_array($result)){
    $count = $data['num'];
}
if ($count==0) {
    $sql = "INSERT INTO haaletustulemus (userid, kandidateid, valimised,updatetime) VALUES ('$a','$b','$c','$d')";
    if(mysqli_query($link, $sql)){
        echo "Hääl antud";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
} else {
    $sql = "UPDATE haaletustulemus SET kandidateid='$b', valimised='$c' WHERE userid='$a'";
    if(mysqli_query($link, $sql)){
        echo "Hääl muudetud";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
}
mysqli_close($link);
?>