<?php include 'includes/header.php';?>
        
<div class="row">
<input type="text" id="otsing"  onkeyup="otsing()" />
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

<?php include 'footer.php';?>