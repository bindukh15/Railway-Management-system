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
$so = $_GET['so'];
$de = $_GET['de'];
$st = $_GET['st'];
$et = $_GET['et'];
$ti = $_GET['ti'];
$ro = $_GET['ro'];

?>
<html>
<head>
<title>
</title>
</head>
<body><center><br><br><br><br>
<form action="#" method="post ">
<table border=2>
<tr><td> schedule_id </td>
<td><input type='number' value="<?php echo "$rn" ?>" name='schedule_id'></input></td></tr>

<tr><td> source </td>
<td><input type='name'  value="<?php echo "$so" ?>" name='source'></input></td></tr>

<tr><td> destination </td>
<td><input type='name'  value="<?php echo "$de" ?>" name='destination'></input></td></tr>

<tr><td> start_time </td>
<td><input type='text'  value="<?php echo "$st" ?>" name='start_time'></input></td></tr>

<tr><td> end_time </td>
<td><input type='text'  value="<?php echo "$et" ?>" name=' end_time'></input></td></tr>

<tr><td> train_id </td>
<td><input type='number' value="<?php echo "$ti" ?>" name='train_id'></input></td></tr>

<tr><td> route_no </td>
<td><input type='number'  value="<?php echo "$ro" ?>" name='route_no'></input></td></tr>


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
 $schedule_id = $_GET['schedule_id'];
$source = $_GET['source'];
$destination = $_GET['destination'];
$start_time = $_GET['start_time'];
$end_time= $_GET['end_time'];
$train_id = $_GET[' train_id'];
$route_no = $_GET['route_no'];



$query="UPDATE schedules SET schedule_id='$schedule_id',source='$source',destination='$destination',start_time='$start_time',end_time='$end_time',
   train_id ='$train_id ',route_no ='$route_no ' WHERE schedule_id= '$schedule_id'";
$data=mysqli_query($conn,$query);
if($data){
echo "<script>alert('Record Updated')</script>";
?>
<META HTTP-EQUIV="Refresh" CONTENT="0; URL= http://localhost/dbms/schedules2.php">
<?php
}
else
{
echo "failed to update";
}
}

?>