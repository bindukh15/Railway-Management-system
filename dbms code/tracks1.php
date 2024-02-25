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
$track_no= $_POST['track_no'];
echo "<br>";
$length= $_POST['length'];
echo "<br>";
$no_of_tracks= $_POST['no_of_tracks'];
echo "<br>";



$sql1="INSERT INTO `tracks`(`track_no`, `length`, `no_of_tracks`) VALUES ('$track_no','$length','$no_of_tracks')";



echo "$sql1";

		
		if ($conn->query($sql1) === TRUE) 
		{
				
				echo "<script>
				alert('Data Inserted Successfully');
				window.location.href='tracks.php';
				</script>";
		} 
		else 
		{	
				echo "error";
				//die();
				echo "<script>
				alert('Data could not be inserted');
				window.location.href='tracks.php';
				</script>";			
		}













?>
</html>