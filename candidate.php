<?php

    include_once './core/init.php'; 
    $e = intval($_GET['e']);
    $p = intval($_GET['p']);
    $s = intval($_SESSION['user_id']);
    $connection = dbConnect();
    $queryKand = mysqli_query($connection,"select kandidaat.*, users.firstname, users.lastname FROM kandidaat INNER JOIN users ON kandidaat.userid = users.user_id WHERE kandidaat.valimisedid = '$e' AND kandidaat.ringkondid = '$p'");
?>
<h2>Kandidaadid:</h2> 
<select name="kandidaat" id="kandidaat"> 
    <option value="">Vali kandidaat...</option>
    <?php 
        while ($row = mysqli_fetch_assoc($queryKand)) {
            echo '<option value="'.$queryNam['userid'].'">'.$queryNam['firstname'].', '.$queryNam['lastname'].'</option>';
        }
    ?> 
</select>
<button class="custombtn1" onclick="haaleta(<?php echo $s;?>, kandidaat.value, <?php echo $e;?>)">HÄÄLETA</button>
<div id="vote"></div>

