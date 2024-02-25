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
$schedule_id= $_POST['schedule_id'];
echo "<br>";
$source= $_POST['source'];
echo "<br>";
$destination= $_POST['destination'];
echo "<br>";
$start_time= $_POST['start_time'];
echo "<br>";
$end_time= $_POST['end_time'];
echo "<br>";
$train_id= $_POST['train_id'];
echo "<br>";
$route_no= $_POST['route_no'];
echo "<br>";




$sql1="INSERT INTO `schedules`(`schedule_id`, `source`, `destination`,`start_time`, `end_time`, `train_id`,`route_no`) VALUES ('$schedule_id','$source','$destination','$start_time','$end_time','$train_id','$route_no')";



echo "$sql1";

		
		if ($conn->query($sql1) === TRUE) 
		{
				
				echo "<script>
				alert('Data Inserted Successfully');
				window.location.href='schedules.php';
				</script>";
		} 
		else 
		{	
				echo "error";
				//die();
				echo "<script>
				alert('Data could not be inserted');
				window.location.href='schedules.php';
				</script>";			
		}













?>
</html>