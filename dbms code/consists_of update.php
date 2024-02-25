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
$ti = $_GET['ti'];
$si = $_GET['si'];
$sd = $_GET['sd'];
$sn = $_GET['sn'];
$at = $_GET['at'];
$dt = $_GET['dt'];

?>
<html>
<head>
<title>
</title>
</head>
<body><center><br><br>
<form action="#" method="post ">
<table border=2>
<tr><td> route_no </td>
<td><input type='number' value="<?php echo "$rn" ?>" name='route_no'></input></td></tr>

<tr><td> train_id </td>
<td><input type='number'  value="<?php echo "$ti" ?>" name='train_id'></input></td></tr>

<tr><td> schedule_id </td>
<td><input type='number'  value="<?php echo "$si" ?>" name='schedule_id'></input></td></tr>

<tr><td> station_id </td>
<td><input type='number' value="<?php echo "$sd" ?>" name='station_id'></input></td></tr>

<tr><td> stop_no </td>
<td><input type='number'  value="<?php echo "$sn" ?>" name='stop_no'></input></td></tr>

<tr><td> arrival_time </td>
<td><input type='text'  value="<?php echo "$at" ?>" name='arrival_time'></input></td></tr>

<tr><td> departure_time </td>
<td><input type='text'  value="<?php echo "$dt" ?>" name='departure_time'></input></td></tr>


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
$train_id = $_GET['train_id'];
$schedule_id = $_GET['schedule_id'];
$station_id = $_GET['station_id'];
$stop_no = $_GET['stop_no'];
$arrival_time = $_GET['arrival_time'];
$departure_time = $_GET['departure_time'];



$query="UPDATE consists_of SET route_no='$route_no',train_id='$train_id',schedule_id='$schedule_id',station_id='$station_id',stop_no='$stop_no',arrival_time='$arrival_time',departure_time='$departure_time' WHERE route_no= '$route_no'";
$data=mysqli_query($conn,$query);
if($data){
echo "<script>alert('Record Updated')</script>";
?>
<META HTTP-EQUIV="Refresh" CONTENT="0; URL= http://localhost/dbms/consists_of2.php">
<?php
}
else
{
echo "failed to update";
}
}

?>