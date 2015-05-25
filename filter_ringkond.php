<?php
include_once './core/init.php';
$q = intval($_GET['q']);
$con = dbConnect();
$sql = ("SELECT users.firstname,users.lastname,erakond.nimi,COUNT(haaletustulemus.kandidateid) AS votes from haaletustulemus
		JOIN kandidaat on haaletustulemus.kandidateid = kandidaat.userid
		JOIN erakond on kandidaat.erakondid = erakond.id
        JOIN ringkond on kandidaat.ringkondid = ringkond.PiirkondID
        JOIN users on kandidaat.userid = users.user_id
        WHERE ringkond.PiirkondID = '$q'
		GROUP BY erakond.nimi");
echo "$q";

$result = mysqli_query($con,$sql);
echo "<table>
<tr>
<th>Eesnimi</th>
<th>Perenimi</th>
<th>Erakond</th>
<th>Tulemus</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['firstname'] . "</td>";
    echo "<td>" . $row['lastname'] . "</td>";
    echo "<td>" . $row['nimi'] . "</td>";
    echo "<td>" . $row['votes'] . "</td>";
    echo "</tr>";
}
echo "</table>";
?>