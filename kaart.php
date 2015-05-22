<?php include 'header.php';?>
        
<div class="row">

<table>
<tbody>
<tr>
<th>Eesnimi</th>
<th>Perekonnanimi</th>
</tr>
<?php
	$result = get_candidates();
	while($row = mysqli_fetch_array($result)){
		echo "<tr>";
		echo "<td>" . $row['firstname'] . "</td>";
		echo "<td>" . $row['lastname'] . "</td>";
		echo "</tr>";
	}
	?>
	</tbody>
	</table>
</div>

<?php include 'footer.php';?>