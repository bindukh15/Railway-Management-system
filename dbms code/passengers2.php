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
echo "<h2>PASSENGER DETAILS </h2>";

}
$sql = "SELECT * FROM passengers  ";
$result=$conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  echo "<html>";
  echo "<table border=1>";
  echo "<tr><th>p_id</th><th>p_name</th><th>age</th><th>gender</th><th>coach</th><th>coach_type</th><th>seat_no</th><th>train_id</th><th>options</th><th>options</th></tr>";
  while($row = $result->fetch_assoc()) {
	  echo "<tr><td>";
  echo $row['p_id'];echo "</td><td>";
  echo $row['p_name'];echo "</td><td>";
  echo $row['age'];echo "</td><td>";
  echo $row['gender'];echo "</td><td>";
  echo $row['coach'];echo "</td><td>";
  echo $row['coach_type'];echo "</td><td>"; 
  echo $row['seat_no'];echo "</td><td>";
  echo $row['train_id'];echo "</td><td> 
  


   <a href='passengers delete.php?rn=$row[p_id]' onclick='returncheckdelete()'><b>Delete</b></a></td>
   <td><a href='passengers update.php?rn=$row[p_id]&pn=$row[p_name]&ag=$row[age]&ge=$row[gender]&ch=$row[coach]&ct=$row[coach_type]&sn=$row[seat_no]&ti=$row[train_id]'><b>Update</b></td>";

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