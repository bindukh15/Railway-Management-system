<!DOCTYPE html>

<html>

    <head>
	
<title>Table with database</title>
<h1>DELETE </h1>

   </head>
     <body>
	 
	 
	 
	 
	 <table border=1>
<tr>
<th>schedule_id</th>
<th>source</th>
<th>destination</th>
<th>start_time</th>
<th>end_time</th>
<th>train_id</th>
<th>route_no</th>









</tr>
        <title> PHP FIND DATA </title>
    <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        

        

 

  

    <form action="schedules delete.php" method="post">
<div class="container">
  <div class="row">
<div class="col-sm-3">


<?php
 $connect = mysqli_connect("localhost", "root","","railway");

 $sel1="SELECT  schedule_id FROM schedules"; 
  $result3=mysqli_query($connect,$sel1);
 ?>
<select name="schedule_id">

     <?php
	  echo "<option value =''>Select..</option>";
	 while($rows =$result3->fetch_assoc())
	 {
		 $schedule_id = $rows['schedule_id'];
		 
		 echo "<option value ='$schedule_id'>$schedule_id</option>";
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
   
 $schedule_id = $_POST['schedule_id'];

//$source = $_POST['source'];

//$destination = $_POST['destination'];

//$start_time = $_POST['start_time'];

//$end_time = $_POST['end_time'];

//$train_id = $_POST['train_id'];

//$route_no = $_POST['route_no'];



	 
    // connect to mysql
   
    
    // mysql search query
    $up = "delete from `schedules` 
	 where `schedule_id`= '$schedule_id'";
   $sel="SELECT schedule_id,source,destination,start_time,end_time,train_id,route_no FROM `schedules` WHERE 1";
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
echo "<tr><td>" . $row["schedule_id"] . "</td><td>" . $row["source"] . "</td><td>" . $row["destination"] . "</td><td>" . $row["start_time"] . "</td><td>" . $row["end_time"] . "</td><td>" . $row["train_id"] ."</td><td>" . $row["route_no"] . "</td><td>". "</td></tr>";
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
<a href="schedules2.php"><b> BACK </b></a>