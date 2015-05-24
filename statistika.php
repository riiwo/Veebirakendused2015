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

  </div>
  <div class="small-12 medium-6 large-3">

  </div>
</div>
<?php include 'includes/footer.php';?>
