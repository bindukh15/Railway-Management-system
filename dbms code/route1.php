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
$route_no= $_POST['route_no'];
echo "<br>";
$total_stops= $_POST['total_stops'];
echo "<br>";
$schedule_id= $_POST['schedule_id'];
echo "<br>";
$train_id= $_POST['train_id'];
echo "<br>";



$sql1="INSERT INTO `route`(`route_no`, `total_stops`, `schedule_id`,`train_id`) VALUES ('$route_no','$total_stops','$schedule_id','$train_id')";



echo "$sql1";

		
		if ($conn->query($sql1) === TRUE) 
		{
				
				echo "<script>
				alert('Data Inserted Successfully');
				window.location.href='route.php';
				</script>";
		} 
		else 
		{	
				echo "error";
				//die();
				echo "<script>
				alert('Data could not be inserted');
				window.location.href='route.php';
				</script>";			
		}













?>
</html>