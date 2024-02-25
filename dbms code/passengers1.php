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
	echo "connected to db";

}


echo "<br>";
$p_id= $_POST['p_id'];
echo "<br>";
$p_name= $_POST['p_name'];
echo "<br>";
$age= $_POST['age'];
echo "<br>";
$gender= $_POST['gender'];
echo "<br>";
$coach= $_POST['coach'];
echo "<br>";
$coach_type= $_POST['coach_type'];
echo "<br>";
$seat_no= $_POST['seat_no'];
echo "<br>";
$train_id= $_POST['train_id'];
echo "<br>";





$sql1="INSERT INTO `passengers`(`p_id`, `p_name`, `age`,`gender`, `coach`, `coach_type`,`seat_no`,`train_id`) VALUES ('$p_id','$p_name','$age','$gender','$coach','$coach_type','$seat_no','$train_id')";



echo "$sql1";

		
		if ($conn->query($sql1) === TRUE) 
		{
				
				echo "<script>
				alert('Data Inserted Successfully');
				window.location.href='passengers.php';
				</script>";
		} 
		else 
		{	
				echo "error";
				//die();
				echo "<script>
				alert('Data could not be inserted');
				window.location.href='passengers.php';
				</script>";			
		}













?>
</html>



