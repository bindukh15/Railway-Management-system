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
$s_id= $_POST['s_id'];
echo "<br>";
$s_name= $_POST['s_name'];
echo "<br>";
$place= $_POST['place'];
echo "<br>";
$track_no= $_POST['track_no'];
echo "<br>";
$station_code= $_POST['station_code'];
echo "<br>";
$zone_id= $_POST['zone_id'];
echo "<br>";



$sql1="INSERT INTO `station`(`s_id`, `s_name`, `place`,`track_no`, `station_code`, `zone_id`) VALUES ('$s_id','$s_name','$place','$track_no','$station_code','$zone_id')";



echo "$sql1";

		
		if ($conn->query($sql1) === TRUE) 
		{
				
				echo "<script>
				alert('Data Inserted Successfully');
				window.location.href='station.php';
				</script>";
		} 
		else 
		{	
				echo "error";
				//die();
				echo "<script>
				alert('Data could not be inserted');
				window.location.href='station.php';
				</script>";			
		}













?>
</html>