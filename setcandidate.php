<?php include 'includes/header.php';?>
<?php 
    include_once './core/init.php'; ?>
    <?php if(logged_in()) :?> 
        <h2>Hetkel käimas olevad valimised</h2>
        <?php 

            $s = intval($_SESSION['user_id']);
            $connection = dbConnect();
            $queryElec = mysqli_query($connection,"select * from valimised");
            $queryPlac = mysqli_query($connection,"select * from ringkond");
            $queryPart = mysqli_query($connection,"select * from erakond");
        ?>
        <select name="election" id="election">
            <option value="">Vali valimine...</option>
        <?php 
        while ($row = mysqli_fetch_assoc($queryElec)) {
            echo '<option value="'.$row['valimised_id'].'">'.$row['name'].'</option>';
        }?>
        </select>

        <h2>Ringkond:</h2>
        <select name="place" id="place">
            <option value="">Vali ringkond...</option>
        <?php 
        while ($row = mysqli_fetch_assoc($queryPlac)) {
            echo '<option value="'.$row['PiirkondID'].'">'.$row['Piirkond'].'</option>';
        }?>
        </select>
        <h2>Erakond:</h2>
        <select name="party" id="party">
            <option value="">Vali erakond...</option>
        <?php 
        while ($row = mysqli_fetch_assoc($queryPart)) {
            echo '<option value="'.$row['id'].'">'.$row['nimi'].'</option>';
        }?>
        </select>
        <button class="custombtn1" onclick="esita(<?php echo $s; ?>, election.value, place.value, party.value)">ESITA</button>
        <div id="esita"></div> 
    <?php else: ?>
        <?php header("Location: login.php"); ?>
    <?php endif; ?>
<?php include 'includes/footer.php';?>