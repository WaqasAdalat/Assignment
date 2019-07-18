<?php

include 'db.php';


	$mysqli_query = "select * from login";
	
  $query = mysqli_query($con,$mysqli_query);
  ?> 

<!DOCTYPE html>
<html>
<head>
	<title></title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  

</head>
<body>
	<div class="container">
		<div class="col-lg-12">
			<br><br>
			<h1 class="text-warning text-center"> Display Table data</h1>
			<br>
			<table id ="tabledata" class="table table-striped table-hover table-bordered">
				
				<tr class="bg-dark text-white text-center">
					<th> Id </th>
					<th> FirstName </th>
					<th> LastName </th>
					<th> Email </th>
					<th> Mobile </th>
					<th> Delete </th>
					<th> Update </th>
				</tr>
<?php
      include"db.php";
      $mysqli_query = "select * from login";
	
      $query = mysqli_query($con,$mysqli_query);
      while ($res = mysqli_fetch_array($query)) 
            {
?>
				<tr class="text-center">
					<td> <?php echo $res['Id'] ?> </td>
					<td> <?php echo $res['FirstName'] ?> </td>
					<td> <?php echo $res['LastName'] ?> </td>
					<td> <?php echo $res['Email'] ?> </td>
					<td> <?php echo $res['Mobile'] ?> </td>

					<td> <button name = "delete" class="btn-danger btn"> <a href="delete.php?id=<?php echo $res['Id']; ?>" class="text-white "> Delete </a></button> </td>

					<td> <button name ="update" class="btn-primary btn"> <a href="update.php?id= <?php echo $res['Id']; ?>" class="text-white "> Update </a></button> </td>

				</tr>
			<?php
			}

			?>



			</table>


		</div>
	</div>
	



</body>
</html>