<?php include_once 'init.php'; ?>
<?php
    $connection = dbConnect();
    $result = mysqli_query($connection, "SELECT COUNT(*) FROM haaletustulemus");
    $row = mysqli_fetch_array($result);
    $thing = $row[0];
    echo $thing;
?>