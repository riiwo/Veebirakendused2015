<?php include_once 'init.php'; ?>
<?php
    $connection = dbConnect();
    $result = mysqli_fetch_assoc(mysqli_query($connection, "SELECT COUNT(*) AS number FROM haaletustulemus"));
    $row = mysqli_fetch_array($result);
    $thing = $row['number'];
    return $thing;
?>