<html>
<head>
<center>

<title> schedules details </title>
<h1 class="text-3xl text-rose">  <strong> SCHEDULES DETAILS <strong>  </h1>


</head>
</center>
<body>
<form action='schedules1.php' method='post'>

<center>
<table border=1>
<style>
    body
    {
	background-image:url('images/p18.png');
	background-repeat:no-repeat;
	background-attachment:fixed;
	background-size:100% 100%
    }
</style>


<tr> <td> <label for ='schedule_id'> schedule_id </label></td>
<td><input type='number' name='schedule_id'></input> </td> </tr>

<tr> <td> <label for ='source'> source </label></td>
<td><input type='text' name='source'></input> </td> </tr>

<tr> <td> <label for ='destination'> destination </label></td>
<td><input type='text' name='destination'></input> </td> </tr>

<tr> <td> <label for ='start_time'> start_time </label></td>
<td><input type='text' name='start_time'></input> </td> </tr>

<tr> <td> <label for ='end_time'> end_time </label></td>
<td><input type='text' name='end_time'></input> </td> </tr>

<tr> <td> <label for ='train_id'> train_id </label></td>
<td><input type='number' name='train_id'></input> </td> </tr>

<tr> <td> <label for= 'route_no'> route_no </label></td>
<td><input type='number' name='route_no'></input> </td> </tr>

<tr><td><input type="reset"></input></td><td><input type=submit value=submit></input></td></tr>

</center>
</table>

</form>
</body>
 
</html>
<br>
<br>
<a href="ADMIN VIEW.php"<p><button class="w2-button w2-white"> BACK</p></a>
