<html>
<?php

$servername='localhost';
$username='root';
$password='';
$dbname='railway';
$conn = new mysqli($servername, $username, $password, $dbname);
if(!$conn){
die('Could not Connect MySql:' .mysql_error());
}
else
{
echo "<center>";
echo "<h2> TRACKS DETAILS </h2>";

}
$sql = "SELECT * FROM tracks  ";
$result=$conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  echo "<html>";
  echo "<table border=1>";
  echo "<tr><th>track_no</th><th>length</th><th>no_of_tracks</th><th>options</th><th>options</th></tr>";
  while($row = $result->fetch_assoc()) {
	  echo "<tr><td>";
  echo $row['track_no'];echo "</td><td>";
  echo $row['length'];echo "</td><td>";
  echo $row['no_of_tracks'];echo "</td><td>

  <a href='tracks delete.php?rn=$row[track_no]' onclick='returncheckdelete()'><b>Delete</b></a></td>
  <td><a href='tracks update.php?rn=$row[track_no]&ln=$row[length]&no=$row[no_of_tracks]'><b>Update</b></td>";

  echo "</tr>";
  } 
  echo "</table>";
  echo "</center>";
  echo "</html>";
}
else {
  echo "NOTHING TO RETRIEVE";
}
?>
</html>

<style>
    body
    {
	background-image:url('images/p14.png');
	background-repeat:no-repeat;
	background-attachment:fixed;
	background-size:100% 100%
    }
</style>



<br>
<br>
<center>
<a href="ADMIN VIEW.php"><b> BACK </b></a>
</center>