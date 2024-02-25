<!DOCTYPE html>

<html>

    <head>
	
<title>Table with database</title>
<h1>DELETE </h1>

   </head>
     <body>
	 
	 
	 
	 
	 <table border=1>
<tr>
<th>s_id</th>
<th>s_name</th>
<th>place</th>
<th>track_no</th>
<th>station_code</th>
<th>zone_id</th>









</tr>
        <title> PHP FIND DATA </title>
    <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        

        

 

  

    <form action="station delete.php" method="post">
<div class="container">
  <div class="row">
<div class="col-sm-3">


<?php
 $connect = mysqli_connect("localhost", "root","","railway");

 $sel1="SELECT  s_id FROM station"; 
  $result3=mysqli_query($connect,$sel1);
 ?>
<select name="s_id">

     <?php
	  echo "<option value =''>Select..</option>";
	 while($rows =$result3->fetch_assoc())
	 {
		 $s_id = $rows['s_id'];
		 
		 echo "<option value ='$s_id'>$s_id</option>";
	 }
	 ?>
	 </select>
     
	
  

        <input type="submit" name="Delete" value="Delete">
</div>
</div>
</div>

      </form>

    </body>

</html>

<style>
    body
    {
	background-image:url('images/p23.png');
	background-repeat:no-repeat;
	background-attachment:fixed;
	background-size:100% 100%
    }
</style>


<?php
 $connect = mysqli_connect("localhost", "root","","railway");
// php code to search data in mysql database and set it in input text

if(isset($_POST['Delete']))
{
    // id to search
   
 $s_id = $_POST['s_id'];

//$s_name = $_POST['s_name'];

//$place = $_POST['place'];

//$track_no = $_POST['track_no'];

//$station_code = $_POST['station_code'];

//$zone_id = $_POST['zone_id'];



	 
    // connect to mysql
   
    
    // mysql search query
    $up = "delete from `station` 
	 where `s_id`= '$s_id'";
   $sel="SELECT s_id,s_name,place,track_no,station_code,zone_id FROM `station` WHERE 1";
   $result=mysqli_query($connect,$up);
   
   $result1=mysqli_query($connect,$sel);
    if($result)
   {
       echo 'Data Updated';
   }else{
       echo 'Data Not Updated';
   }
     if($result1->num_rows > 0)
    {
    // output data of each row
   while($row = $result1->fetch_assoc()) {
echo "<tr><td>" . $row["s_id"] . "</td><td>" . $row["s_name"] . "</td><td>" . $row["place"] . "</td><td>" . $row["track_no"] . "</td><td>" . $row["station_code"] . "</td><td>" . $row["zone_id"] . "</td><td>". "</td></tr>";
}} else { 
    echo "0 results";
}
   mysqli_close($connect);

// in the first time inputs are empty

}

?>

</table>

<br>
<br>
<a href="station2.php"><b> BACK </b></a>