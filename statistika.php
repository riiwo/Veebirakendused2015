<?php include 'includes/header.php';?>
<div class="row">
  <div class="small-12 medium-6 large-3">
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
  <div class="small-12 medium-6 large-3">
  <table>
      <tbody>
        <tr>
          <th colspan="2">Nimi</th>
          <th>Erakond</th>
          <th>Tulemus</th>
        </tr>
        <?php
        $result = tulemused_koik();
        while($row = mysqli_fetch_array($result)){
          echo "<tr>";
          echo "<td>" . $row['firstname'] . "</td>";
          echo "<td>" . $row['lastname'] . "</td>";
          echo "<td>" . $row['nimi'] . "</td>";
          echo "<td>" . $row['votes'] . "</td>";
          echo "</tr>";
        }
        ?>
      </tbody>
    </table>
  </div>
  <div class="small-12 medium-6 large-3">
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
  <div class="small-12 medium-6 large-3">

  </div>
</div>
<?php include 'includes/footer.php';?>
