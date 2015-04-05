<?php
include_once 'init.php'; 
$link = dbConnect();
$a = intval($_GET['a']);
$b = intval($_GET['b']);
$c = intval($_GET['c']);
$d = intval($_GET['d']);
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$query = "SELECT COUNT(*) as num FROM kandidaat WHERE userid = '$a'";
$result = mysqli_query($link, $query);
while($data=mysqli_fetch_array($result)){
    $count = $data['num'];
}
if ($count==0) {
    $sql = "INSERT INTO kandidaat (userid, valimisedid, ringkondid, erakondid) VALUES ('$a','$b','$c','$d')";
    $sql2 = "UPDATE users SET isKandidaat='1' WHERE user_id='$a'";
    if(mysqli_query($link, $sql) && mysqli_query($link, $sql2)){
        echo "Kandidatuur esitatud.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
} else {
    $sql = "UPDATE kandidaat SET valimisedid='$b', ringkondid='$c', erakondid='$d' WHERE userid='$a'";
    $sql2 = "UPDATE users SET isKandidaat='1' WHERE user_id='$a'";
    
    if(mysqli_query($link, $sql) && mysqli_query($link, $sql2)){
        echo "Kandidatuur muudetud.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
}
mysqli_close($link);
?>