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
$train_id= $_POST['train_id'];
echo "<br>";
$track_no= $_POST['track_no'];
echo "<br>";




$sql1="INSERT INTO `moves_on`(`train_id`, `track_no`) VALUES ('$train_id','$track_no')";



echo "$sql1";

		
		if ($conn->query($sql1) === TRUE) 
		{
				
				echo "<script>
				alert('Data Inserted Successfully');
				window.location.href='moves_on.php';
				</script>";
		} 
		else 
		{	
				echo "error";
				//die();
				echo "<script>
				alert('Data could not be inserted');
				window.location.href='moves_on.php';
				</script>";			
		}













?>
</html>