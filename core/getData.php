<?php include_once 'init.php'; ?>
<?php
    $connection = dbConnect();
    $lastmodif = isset($_GET['timestamp']) ? intval($_GET['timestamp']) : 0;
    $currentmodif = mysqli_fetch_assoc(mysqli_query($connection, "SELECT MAX(updatetime) AS time FROM haaletustulemus"))['time'];
    while ($currentmodif <= $lastmodif) {
        clearstatcache();
        $currentmodif = mysqli_fetch_assoc(mysqli_query($connection, "SELECT MAX(updatetime) AS time FROM haaletustulemus"))['time'];
    }
    $response = array();
    $response['msg'] = mysqli_fetch_assoc(mysqli_query($connection,"select count(*) AS votes from haaletustulemus"))['votes'];
    $response['timestamp'] = $currentmodif;
    echo json_encode($response);
?>