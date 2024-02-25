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
	echo "<br>";

}
error_reporting(0);
$rn = $_GET['rn'];
$ts = $_GET['ts'];
$si = $_GET['si'];
$ti = $_GET['ti'];
?>
<html>
<head>
<title>
</title>
</head>
<body><center><br><br><br>
<form action="#" method="post ">
<table border=2>
<tr><td> route_no </td>
<td><input type='number' value="<?php echo "$rn" ?>" name='route_no'></input></td></tr>

<tr><td> total_stops </td>
<td><input type='number'  value="<?php echo "$ts" ?>" name='total_stops'></input></td></tr>

<tr><td> schedule_id </td>
<td><input type='number'  value="<?php echo "$si" ?>" name='schedule_id'></input></td></tr>

<tr><td>train_id </td>
<td><input type='number'  value="<?php echo "$ti" ?>" name='train_id'></input></td></tr>


<tr>
<td colspan="2" align="center"><input type="submit" id="button" name="submit" value="update details"></td></tr>
</form>
</center>
</table>
</body>
</html>

<style>
    body
    {
	background-image:url('images/p24.png');
	background-repeat:no-repeat;
	background-attachment:fixed;
	background-size:100% 100%
    }
</style>


<?php

if($_GET['submit'])
{
 $route_no = $_GET['route_no'];
$total_stops = $_GET['total_stops'];
$schedule_id = $_GET['schedule_id'];
$train_id = $_GET['train_id'];


$query="UPDATE route SET route_no='$route_no',total_stops='$total_stops',schedule_id='$schedule_id ',train_id='$train_id' WHERE route_no= '$route_no'";
$data=mysqli_query($conn,$query);
if($data){
echo "<script>alert('Record Updated')</script>";
?>
<META HTTP-EQUIV="Refresh" CONTENT="0; URL= http://localhost/dbms/route2.php">
<?php
}
else
{
echo "failed to update";
}
}

?>