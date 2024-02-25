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
$t_id= $_POST['t_id'];
echo "<br>";
$t_name= $_POST['t_name'];
echo "<br>";
$t_type= $_POST['t_type'];
echo "<br>";



$sql1="INSERT INTO `train`(`t_id`, `t_name`, `t_type`) VALUES ('$t_id','$t_name','$t_type')";



echo "$sql1";

		
		if ($conn->query($sql1) === TRUE) 
		{
				
				echo "<script>
				alert('Data Inserted Successfully');
				window.location.href='train1.php';
				</script>";
		} 
		else 
		{	
				echo "error";
				//die();
				echo "<script>
				alert('Data could not be inserted');
				window.location.href='train1.php';
				</script>";			
		}













?>
</html>