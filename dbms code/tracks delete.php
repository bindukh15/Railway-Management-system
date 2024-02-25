<!DOCTYPE html>

<html>

    <head>
	
<title>Table with database</title>
<h1>DELETE </h1>

   </head>
     <body>
	 
	 
	 
	 
	 <table border=1>
<tr>
<th>track_no</th>
<th>length</th>
<th>no_of_tracks</th>









</tr>
        <title> PHP FIND DATA </title>
    <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        
        

 

  

    <form action="tracks delete.php" method="post">
<div class="container">
  <div class="row">
<div class="col-sm-3">


<?php
 $connect = mysqli_connect("localhost", "root","","railway");

 $sel1="SELECT  track_no FROM tracks"; 
  $result3=mysqli_query($connect,$sel1);
 ?>
<select name="track_no">

     <?php
	  echo "<option value =''>Select..</option>";
	 while($rows =$result3->fetch_assoc())
	 {
		 $track_no = $rows['track_no'];
		 
		 echo "<option value ='$track_no'>$track_no</option>";
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
   
 $track_no = $_POST['track_no'];

//$length = $_POST['length'];

//$no_of_tracks = $_POST['no_of_tracks'];



	 
    // connect to mysql
   
    
    // mysql search query
    $up = "delete from `tracks` 
	 where `track_no`= '$track_no'";
   $sel="SELECT track_no,length,no_of_tracks FROM `tracks` WHERE 1";
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
echo "<tr><td>" . $row["track_no"] . "</td><td>" . $row["length"] . "</td><td>" . $row["no_of_tracks"] . "</td><td>". "</td></tr>";
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
<a href="tracks2.php"><b> BACK </b></a>