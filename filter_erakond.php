<?php
include_once './core/init.php';
$q = intval($_GET['q']);
$con = dbConnect();
$sql = ("SELECT users.firstname,users.lastname,COUNT(haaletustulemus.kandidateid) AS votes from haaletustulemus
        JOIN kandidaat on haaletustulemus.kandidateid = kandidaat.userid
        JOIN erakond on kandidaat.erakondid = erakond.id
        JOIN users on kandidaat.userid = users.user_id
        where erakond.id = '$q'
        GROUP BY users.firstname");
$result = mysqli_query($con,$sql);
echo "<table>
<tr>
<th>Eesnimi</th>
<th>Perenimi</th>
<th>Tulemus</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['firstname'] . "</td>";
    echo "<td>" . $row['lastname'] . "</td>";
    echo "<td>" . $row['votes'] . "</td>";
    echo "</tr>";
}
echo "</table>";
?>