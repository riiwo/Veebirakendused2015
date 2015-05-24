<?php

    include_once './core/init.php'; 
    $e = intval($_GET['e']);
    $p = intval($_GET['p']);
    $s = intval($_SESSION['user_id']);
    $connection = dbConnect();
    $queryKand = mysqli_query($connection,"select kandidaat.*, users.firstname, users.lastname FROM kandidaat INNER JOIN users ON kandidaat.userid = users.user_id WHERE kandidaat.valimisedid = '$e' AND kandidaat.ringkondid = '$p'");
?>
<p>Kandidaadid:</p> 
<select name="kandidaat" id="kandidaat"> 
    <option value="">Vali kandidaat...</option>
    <?php 
        while ($row = mysqli_fetch_assoc($queryKand)) {
            echo '<option value="'.$row['userid'].'">'.$row['firstname'].', '.$row['lastname'].'</option>';
        }
    ?> 
</select>
<a href="#" class="button radius" onclick="haaleta(<?php echo $s;?>, kandidaat.value, <?php echo $e;?>)">HÄÄLETA</a>
<div id="vote"></div>

