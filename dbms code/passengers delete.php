<!DOCTYPE html>

<html>

    <head>
	
<title>Table with database</title>
<h1>DELETE </h1>

   </head>
     <body>
	 
	 
	 
	 
	 <table border=1>
<tr>
<th>p_id</th>
<th>p_name</th>
<th>age</th>
<th>gender</th>
<th>coach</th>
<th>coach_type</th>
<th>seat_no</th>
<th>train_id</th>









</tr>
        <title> PHP FIND DATA </title>
    <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        

        

 

  

    <form action="passengers delete.php" method="post">
<div class="container">
  <div class="row">
<div class="col-sm-3">


<?php
 $connect = mysqli_connect("localhost", "root","","railway");

 $sel1="SELECT  p_id FROM passengers"; 
  $result3=mysqli_query($connect,$sel1);
 ?>
<select name="p_id">

     <?php
	  echo "<option value =''>Select..</option>";
	 while($rows =$result3->fetch_assoc())
	 {
		 $p_id = $rows['p_id'];
		 
		 echo "<option value ='$p_id'>$p_id</option>";
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
   
 $p_id = $_POST['p_id'];

//$p_name = $_POST['p_name'];

//$age = $_POST['age'];

//$gender = $_POST['gender'];

//$coach = $_POST['coach'];

//$coach_type = $_POST['coach_type'];

//$seat_no = $_POST['seat_no'];

//$train_id = $_POST['train_id'];



	 
    // connect to mysql
   
    
    // mysql search query
    $up = "delete from `passengers` 
	 where `p_id`= '$p_id'";
   $sel="SELECT p_id,p_name,age,gender,coach,coach_type,seat_no,train_id FROM `passengers` WHERE 1";
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
echo "<tr><td>" . $row["p_id"] . "</td><td>" . $row["p_name"] . "</td><td>" . $row["age"] . "</td><td>" . $row["gender"] .  "</td><td>" 
. $row["coach"] . "</td><td>" . $row["coach_type"] . "</td><td>" . $row["seat_no"] ."</td><td>" . $row["train_id"] ."</td><td>". "</td></tr>";
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
<a href="passengers2.php"><b> BACK </b></a>