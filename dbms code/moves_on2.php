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
echo "<h2> MOVES_ON DETAILS </h2>";
}
$sql = "SELECT * FROM moves_on  ";
$result=$conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  echo "<html>";
  echo "<table border=1>";
  echo "<tr><th>train_id</th><th>track_no</th><th>options</th><th>options</th></tr>";
  while($row = $result->fetch_assoc()) {
	  echo "<tr><td>";
  echo $row['train_id'];echo "</td><td>";
  echo $row['track_no'];echo "</td><td>

  <a href='moves_on delete.php?rn=$row[train_id]' onclick='returncheckdelete()'><b>Delete</b></a></td>
  <td><a href='moves_on update.php?rn=$row[train_id]&tn=$row[track_no]'><b>Update</b></td>";


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