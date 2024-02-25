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
$pn = $_GET['pn'];
$ag = $_GET['ag'];
$ge = $_GET['ge'];
$ch = $_GET['ch'];
$ct = $_GET['ct'];
$sn = $_GET['sn'];
$ti = $_GET['ti'];
?>
<html>
<head>
<title>
</title>
</head>
<body><center><br><br><br><br>
<form action="#" method="post ">
<table border=2>


<tr><td> p_id </td>
<td><input type='number' value="<?php echo "$rn" ?>" name='p_id'></input></td></tr>

<tr><td> p_name </td>
<td><input type='text'  value="<?php echo "$pn" ?>" name='p_name'></input></td></tr>

<tr><td> age </td>
<td><input type='number'  value="<?php echo "$ag" ?>" name='age'></input></td></tr>

<tr><td>gender </td>
<td><input type='text'  value="<?php echo "$ge" ?>" name='gender'></input></td></tr>

<tr><td>coach </td>
<td><input type='number'  value="<?php echo "$ch" ?>" name='coach'></input></td></tr>


<tr><td> coach_type </td>
<td><input type='text' value="<?php echo "$ct" ?>" name='coach_type'></input></td></tr>

<tr><td> seat_no </td>
<td><input type='text'  value="<?php echo "$sn" ?>" name='seat_no'></input></td></tr>

<tr><td> train_id </td>
<td> <input type="number" value="<?php echo "$ti" ?>" name="train_id"></input></td></tr>

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
 $p_id = $_GET['p_id'];
$p_name = $_GET['p_name'];
$age = $_GET['age'];
$gender = $_GET['gender'];
$coach = $_GET['coach'];
$coach_type = $_GET['coach_type'];
$seat_no = $_GET['seat_no'];
$train_id = $_GET['train_id'];


$query="UPDATE passengers SET p_id='$p_id',p_name='$p_name',age='$age',gender='$gender',coach='$coach',
    coach_type='$coach_type',seat_no='$seat_no',train_id='$train_id' WHERE p_id= '$p_id'";
$data=mysqli_query($conn,$query);
if($data){
echo "<script>alert('Record Updated')</script>";
?>
<META HTTP-EQUIV="Refresh" CONTENT="0; URL= http://localhost/dbms/passengers2.php">
<?php
}
else
{
echo "failed to update";
}
}

?>