<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <center><h1><b>schedules</b></h1></center>

    <div class= "container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="card">
                    <div class="card.header">
                        
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="searchdata" class="form-control" placeholder="Seacrh record (source/destination)" autocomplete ="off">
                                </div>

                            </div>
                            <div class="col-md-6">
                                <button  type ="submit" name="filterbutton" class="btn btn-info my-7">Seacrh</button>
                                <button class="btn btn-secondary my-7"><a href="schedules2.php" class="text-light">Back</a>
</button>
                            </div>
                            
                        </form>
                       
                            <tbody>
                                <?php
                                $connection = mysqli_connect ("localhost","root","","railway");
                                if(isset($_POST['filterbutton']))
                                {
                                    $text = $_POST['searchdata'];
                                    $query = "select * from schedules where concat(source) like '%$text%' ";
                                    $query_run = mysqli_query($connection, $query);
                                   //$sql = "SELECT * FROM schedules";
//$result=$connection->query($sql);
if (mysqli_num_rows($query_run) > 0) {
  // output data of each row
  echo "<html>";
  echo "<table border=1>";
  echo "<tr><th>schedule_id</th><th>source</th><th>destination</th><th>start_time</th><th>end_time</th><th>train_id</th><th>route_no</th><th>options</th><th>options</th></tr>";
  while($row = mysqli_fetch_array( $query_run)) {
	  echo "<tr><td>";
  echo $row['schedule_id'];echo "</td><td>";
  echo $row['source'];echo "</td><td>";
  echo $row['destination'];echo "</td><td>";
  echo $row['start_time'];echo "</td><td>";
  echo $row['end_time'];echo "</td><td>";
  echo $row['train_id'];echo "</td><td>";
  echo $row['route_no'];echo "</th></tr>";
  
 
  } 
  echo "</table>";
  echo "</center>";
  echo "</html>";
}

                                    else
                                    {
                                        ?>
                                        <tr>
                                            <td colspan="6">no record found</td>
                                        </tr>
                                        <?php
                                    }
                                }

                                ?>
                        
                            
                            </tbody>
                            </table>
                    </div>
                </div>
            </div>
        </div>
     </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>