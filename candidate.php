<?php

    include_once './core/init.php'; 
    $e = intval($_GET['e']);
    $p = intval($_GET['p']);
    $s = intval($_SESSION['user_id']);
    $connection = dbConnect();
    $queryKand = mysqli_query($connection,"select * from kandidaat WHERE valimisedid = '$e' AND ringkondid = '$p'");
?>
<h2>Kandidaadid:</h2> 
<select name="kandidaat" id="kandidaat"> 
    <option value="">Vali kandidaat...</option>
    <?php 
        while ($row = mysqli_fetch_assoc($queryKand)) {
            $abi = $row['userid'];
            $queryNam =  mysqli_fetch_assoc(mysqli_query($connection, "SELECT firstname, lastname FROM users WHERE user_id = '$abi'"));
            echo '<option value="'.$abi.'">'.$queryNam['firstname'].', '.$queryNam['lastname'].'</option>';
        }
    ?> 
</select>
<button class="custombtn1" onclick="haaleta(<?php echo $s;?>, kandidaat.value, <?php echo $e;?>)">HÄÄLETA</button>
<div id="vote"></div>

