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
$train_id= $_POST['train_id'];
echo "<br>";
$schedule_id= $_POST['schedule_id'];
echo "<br>";
$station_id= $_POST['station_id'];
echo "<br>";
$stop_no= $_POST['stop_no'];
echo "<br>";
$arrival_time= $_POST['arrival_time'];
echo "<br>";
$departure_time= $_POST['departure_time'];
echo "<br>";



$sql1="INSERT INTO `consists_of`(`route_no`, `train_id`, `schedule_id`,`station_id`,`stop_no`, `arrival_time`,`departure_time`) VALUES ('$route_no','$train_id','$schedule_id','$station_id','$stop_no','$arrival_time','$departure_time')";



echo "$sql1";

		
		if ($conn->query($sql1) === TRUE) 
		{
				
				echo "<script>
				alert('Data Inserted Successfully');
				window.location.href='consists_of.php';
				</script>";
		} 
		else 
		{	
				echo "error";
				//die();
				echo "<script>
				alert('Data could not be inserted');
				window.location.href='consists_of.php';
				</script>";			
		}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	
	
</head>
<body >
	
</body>
</html>