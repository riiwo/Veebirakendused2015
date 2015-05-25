<?php include 'includes/header.php';?>
<div class="row">
  <div class="small-12 medium-6 column">
    <table>
      <tbody>
        <tr>
          <th>Erakond</th>
          <th>Tulemus</th>
        </tr>
        <?php
        $result = tulemused_riik();
        while($row = mysqli_fetch_array($result)){
          echo "<tr>";
          echo "<td>" . $row['nimi'] . "</td>";
          echo "<td>" . $row['votes'] . "</td>";
          echo "</tr>";
        }
        ?>
      </tbody>
    </table>
  </div>
  <div class="small-12 medium-6 column">
  <table>
      <tbody>
        <tr>
          <th>Eesnimi</th>
          <th>Perenimi</th>
          <th>Erakond</th>
          <th>Ringkond</th>
          <th>Tulemus</th>
        </tr>
        <?php
        $result = tulemused_koik();
        while($row = mysqli_fetch_array($result)){
          echo "<tr>";
          echo "<td>" . $row['firstname'] . "</td>";
          echo "<td>" . $row['lastname'] . "</td>";
          echo "<td>" . $row['nimi'] . "</td>";
           echo "<td>" . $row['PiirKond'] . "</td>";
          echo "<td>" . $row['votes'] . "</td>";
          echo "</tr>";
        }
        ?>
      </tbody>
    </table>
  </div>
  </div>
  <div class="row">
  <div class="small-12 medium-6 column">
  <form>
    <select name="ringkond" onchange="filter_ringkond(this.value)">
                <option value="">Vali ringkond:</option>
                <?php 
                $connection = dbConnect();
                $queryPlac = mysqli_query($connection,"select * from ringkond");
                while ($row = mysqli_fetch_assoc($queryPlac)) {
                    if ($row['PiirkondID']== $p) {
                        echo '<option selected="selected" value="'.$row['PiirkondID'].'">'.$row['Piirkond'].'</option>';
                    } else {
                        echo '<option value="'.$row['PiirkondID'].'">'.$row['Piirkond'].'</option>';
                    }
                }
                ?>
            </select>
        </form>
        <div id="filter_result">

        </div>
  </div>
  <div class="small-12 medium-6 column">
    <form>
    <select name="erakond" onchange="filter_erakond(this.value)">
                <option value="">Vali ringkond:</option>
                <?php 
                $connection = dbConnect();
                $queryE = mysqli_query($connection,"select * from erakond");
                while ($row = mysqli_fetch_assoc($queryE)) {
                    if ($row['id']== $p) {
                        echo '<option selected="selected" value="'.$row['id'].'">'.$row['nimi'].'</option>';
                    } else {
                        echo '<option value="'.$row['id'].'">'.$row['nimi'].'</option>';
                    }
                }
                ?>
            </select>
        </form>
        <div id="filter_result_e">

        </div>
  </div>
</div>
<?php include 'includes/footer.php';?>
