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
$sn = $_GET['sn'];
$pl = $_GET['pl'];
$tn = $_GET['tn'];
$sc = $_GET['sc'];
$zi = $_GET['zi'];
?>
<html>
<head>
<title>
</title>
</head>
<body><center><br><br><br>
<form action="#" method="post ">
<table border=2>
<tr><td> s_id </td>
<td><input type='number' value="<?php echo "$rn" ?>" name='s_id'></input></td></tr>

<tr><td> s_name </td>
<td><input type='text'  value="<?php echo "$sn" ?>" name='s_name'></input></td></tr>

<tr><td> place </td>
<td><input type='text'  value="<?php echo "$pl" ?>" name='place'></input></td></tr>

<tr><td> track_no </td>
<td><input type='number' value="<?php echo "$tn" ?>" name='track_no'></input></td></tr>

<tr><td> station_code </td>
<td><input type='text'  value="<?php echo "$sc" ?>" name='station_code'></input></td></tr>

<tr><td> zone_id </td>
<td><input type='text'  value="<?php echo "$zi" ?>" name='zone_id'></input></td></tr>



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
 $s_id = $_GET['s_id'];
$s_name = $_GET['s_name'];
$place = $_GET['place'];
$track_no = $_GET['track_no'];
$station_code = $_GET['station_code'];
$zone_id = $_GET['zone_id'];



$query="UPDATE station SET s_id='$s_id',s_name='$s_name',place='$place',track_no='$track_no',station_code='$station_code',zone_id='$zone_id 'WHERE s_id= '$s_id'";
$data=mysqli_query($conn,$query);
if($data){
echo "<script>alert('Record Updated')</script>";
?>
<META HTTP-EQUIV="Refresh" CONTENT="0; URL= http://localhost/dbms/station2.php">
<?php
}
else
{
echo "failed to update";
}
}

?>