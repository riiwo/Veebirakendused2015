<?php include 'includes/header.php';?>
<?php include_once './core/init.php'; ?>

<?php if(logged_in()) :?> 
    <?php 
        if (isset($_GET['e'])) {
            $e = intval($_GET['e']);
            $p = intval($_GET['p']);
        }
    ?>
    <div class="row">
       <div class="small-12 medium-6">
        <input type="text" id="otsi"/>
<table id="k-tabel">
<tbody>
<tr>
<th>Eesnimi</th>
<th>Perekonnanimi</th>
<th>Erakond</th>
<th>Piirkond</th>
</tr>
<?php
    $result = get_candidates();
    while($row = mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>" . $row['firstname'] . "</td>";
        echo "<td>" . $row['lastname'] . "</td>";
        echo "<td>" . $row['nimi'] . "</td>";
        echo "<td>" . $row['Piirkond'] . "</td>";
        echo "</tr>";
    }
    ?>
    </tbody>
    </table>        
    </div>
    <div class="small-12 large-6">
    <h2>Hetkel käimas olevad valimised</h2>
    <?php 
        $connection = dbConnect();
        $queryElec = mysqli_query($connection,"select * from valimised");
        $queryPlac = mysqli_query($connection,"select * from ringkond");
    ?>
    <select name="election" id="election" onchange="showContent(election.value, place.value)">
        <option value="">Vali valimine...</option>
    <?php 
    while ($row = mysqli_fetch_assoc($queryElec)) {
        if ($row['valimised_id']== $e) {
            echo '<option selected="selected" value="'.$row['valimised_id'].'">'.$row['name'].'</option>';
        } else {
            echo '<option value="'.$row['valimised_id'].'">'.$row['name'].'</option>';
        }
    }?>
    </select>

    <h2>Ringkond:</h2>
    <select name="place" id="place" onchange="showContent(election.value, place.value)">
        <option value="">Vali ringkond...</option>
    <?php 
    while ($row = mysqli_fetch_assoc($queryPlac)) {
        if ($row['PiirkondID']== $p) {
            echo '<option selected="selected" value="'.$row['PiirkondID'].'">'.$row['Piirkond'].'</option>';
        } else {
            echo '<option value="'.$row['PiirkondID'].'">'.$row['Piirkond'].'</option>';
        }
    }?>
    </select>
    <div id="kandidate">
       <?php 
            if (isset($_GET['e'])) {
                $e = intval($_GET['e']);
                $p = intval($_GET['p']);
                echo ("<script type='text/javascript'> showContent($e, $p) </script>");
            }
        ?>
    </div>
    </div>
    </div>
<?php else: ?>
    <?php header("Location: index.php"); ?>
<?php endif; ?>
<?php include 'includes/footer.php';?>