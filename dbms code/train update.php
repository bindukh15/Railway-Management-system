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
$tp = $_GET['tp'];

?>
<html>
<head>
<title>
</title>
</head>
<body><center><br><br><br><br>
<form action="#" method="post ">
<table border=2>
<tr><td> t_id </td>
<td><input type='number' value="<?php echo "$rn" ?>" name='t_id'></input></td></tr>

<tr><td> t_name </td>
<td><input type='text'  value="<?php echo "$tn" ?>" name='t_name'></input></td></tr>

<tr><td> t_type </td>
<td><input type='text'  value="<?php echo "$tp" ?>" name='t_type'></input></td></tr>




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
 $t_id = $_GET['t_id'];
$t_name = $_GET['t_name'];
$t_type = $_GET['t_type'];



$query="UPDATE train SET t_id='$t_id',t_name='$t_name',t_type='$t_type'WHERE t_id= '$t_id'";
$data=mysqli_query($conn,$query);
if($data){
echo "<script>alert('Record Updated')</script>";
?>
<META HTTP-EQUIV="Refresh" CONTENT="0; URL= http://localhost/dbms/train2.php">
<?php
}
else
{
echo "failed to update";
}
}

?>