<!DOCTYPE html>

<html>

    <head>
	
<title>Table with database</title>
<h1>DELETE </h1>

   </head>
     <body>
	 
	 
	 
	 
	 <table border=1>
<tr>
<th>route_no</th>
<th>train_id</th>
<th>schedule_id</th>
<th>station_id</th>
<th>stop_no</th>
<th>arrival_time</th>
<th>departure_time</th>









</tr>
        <title> PHP FIND DATA </title>
    <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        

        

 

  

    <form action="consists_of delete.php" method="post">
<div class="container">
  <div class="row">
<div class="col-sm-3">


<?php
 $connect = mysqli_connect("localhost", "root","","railway");

 $sel1="SELECT  route_no FROM consists_of"; 
  $result3=mysqli_query($connect,$sel1);
 ?>
<select name="route_no">

     <?php
	  echo "<option value =''>Select..</option>";
	 while($rows =$result3->fetch_assoc())
	 {
		 $route_no = $rows['route_no'];
		 
		 echo "<option value ='$route_no'>$route_no</option>";
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
   
 $route_no = $_POST['route_no'];

//$train_id = $_POST['train_id'];

//$schedule_id = $_POST['schedule_id'];

//$station_id = $_POST['station_id'];

//$stop_no = $_POST['stop_no'];

//$arrival_time = $_POST['arrival_time'];

//$departure_time = $_POST['departure_time'];


	 
    // connect to mysql
   
    
    // mysql search query
    $up = "delete from `consists_of` 
	 where `route_no`= '$route_no'";
   $sel="SELECT route_no,train_id,schedule_id,station_id,stop_no,arrival_time,departure_time FROM `consists_of` WHERE 1";
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
echo "<tr><td>" . $row["route_no"] . "</td><td>" . $row["train_id"] . "</td><td>" . $row["schedule_id"] . "</td><td>" . $row["station_id"] .  "</td><td>" 
. $row["stop_no"] . "</td><td>" . $row["arrival_time"] . "</td><td>" . $row["departure_time"] . "</td><td>". "</td></tr>";
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
<a href="consists_of2.php"><b> BACK </b></a>


