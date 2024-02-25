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
$ln = $_GET['ln'];
$no = $_GET['no'];

?>
<html>
<head>
<title>
</title>
</head>
<body><center><br><br><br><br>
<form action="#" method="post ">
<table border=2>
<tr><td> track_no </td>
<td><input type='number' value="<?php echo "$rn" ?>" name='track_no'></input></td></tr>

<tr><td> length </td>
<td><input type='text'  value="<?php echo "$ln" ?>" name='length'></input></td></tr>

<tr><td> no_of_tracks </td>
<td><input type='text'  value="<?php echo "$no" ?>" name='no_of_tracks'></input></td></tr>




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
 $track_no = $_GET['track_no'];
$length = $_GET['length'];
$no_of_tracks = $_GET['no_of_tracks'];



$query="UPDATE tracks SET track_no='$track_no',length='$length',no_of_tracks='$no_of_tracks ' WHERE track_no= '$track_no'";
$data=mysqli_query($conn,$query);
if($data){
echo "<script>alert('Record Updated')</script>";
?>
<META HTTP-EQUIV="Refresh" CONTENT="0; URL= http://localhost/dbms/tracks2.php">
<?php
}
else
{
echo "failed to update";
}
}

?>