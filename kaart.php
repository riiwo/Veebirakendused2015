<?php include 'header.php';?>
        
<div class="row">

<table>
<tbody>
<tr>
<th>Eesnimi</th>
<th>Perekonnanimi</th>
</tr>
<?php
	while($row = mysqli_fetch_array(get_candidates()){
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