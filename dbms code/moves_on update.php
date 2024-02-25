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
$tn = $_GET['tn'];

?>
<html>
<head>
<title>
</title>
</head>
<body><center><br><br>
<form action="#" method="post ">
<table border=2>


<tr><td> train_id </td>
<td> <input type="number" value="<?php echo "$rn" ?>" name="train_id"></input></td></tr>

<tr><td> track_no </td>
<td> <input type="number" value="<?php echo "$tn" ?>" name="track_no"></input></td></tr>
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
$train_id = $_GET['train_id'];
$track_no = $_GET['track_no'];

$query="UPDATE moves_on SET train_id='$train_id',track_no='$track_no' WHERE train_id= '$train_id'";
$data=mysqli_query($conn,$query);
if($data){
echo "<script>alert('Record Updated')</script>";
?>
<META HTTP-EQUIV="Refresh" CONTENT="0; URL= http://localhost/dbms/moves_on2.php">
<?php
}
else
{
echo "failed to update";
}
}

?>