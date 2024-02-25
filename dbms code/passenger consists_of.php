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
echo "<h2> CONSISTS_OF DEATILS </h2>";
}
$sql = "SELECT * FROM consists_of  ";
$result=$conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  echo "<html>";
  echo "<table border=1>";
  echo "<tr><th>route_no</th><th>train_id</th><th>schedule_id</th><th>station_id</th><th>stop_no</th><th>arrival_time</th><th>departure_time</th></tr>";
  while($row = $result->fetch_assoc()) {
	  echo "<tr><td>";
  echo $row['route_no'];echo "</td><td>";
  echo $row['train_id'];echo "</td><td>";
  echo $row['schedule_id'];echo "</td><td>";
  echo $row['station_id'];echo "</td><td>";
  echo $row['stop_no'];echo "</td><td>";
  echo $row['arrival_time'];echo "</td><td>"; 
  echo $row['departure_time'];echo "</td><td>";
  
  
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
<a href="view details.php"><b> BACK </b></a>
</center>