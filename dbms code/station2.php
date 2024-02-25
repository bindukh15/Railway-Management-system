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
echo "<h2> STATION DETAILS </h2>";
}
$sql = "SELECT * FROM station  ";
$result=$conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  echo "<html>";
  echo "<table border=1>";
  echo "<tr><th>s_id</th><th>s_name</th><th>place</th><th>track_no</th><th>station_code</th><th>zone_id</th><th>options</th><th>options</th></tr>";
  while($row = $result->fetch_assoc()) {
	  echo "<tr><td>";
  echo $row['s_id'];echo "</td><td>";
  echo $row['s_name'];echo "</td><td>";
  echo $row['place'];echo "</td><td>";
  echo $row['track_no'];echo "</td><td>";
  echo $row['station_code'];echo "</td><td>";
  echo $row['zone_id'];echo "</td><td>


  <a href='station delete.php?rn=$row[s_id]' onclick='returncheckdelete()'><b>Delete</b></a></td>
  <td><a href='station update.php?rn=$row[s_id]&sn=$row[s_name]&pl=$row[place]&tn=$row[track_no]&sc=$row[station_code]&zi=$row[zone_id]'><b>Update</b></td>";

  
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