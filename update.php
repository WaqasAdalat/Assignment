<?php

include "db.php";
 

if (isset($_POST['update'])) {
    
    $id = $_GET['Id'];

	$mysqli_query = "SELECT `Id =$id`  FROM `login` WHERE 1 ";
	
  $query = mysqli_query($con,$mysqli_query);
  header('location:diplay.php');
}


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
	<div class="col-lg-6 m-auto">
		<form method="post"><br><br>
			<div class="card">
				<div class="card-header bg-dark text-center">
					<h1 class="text-white text-center">Update Operation</h1>
				</div><br>

                 <label>FirstName:</label>
                 <input type="text" name="firstname" class="form-control">   <br>

                 <label>LastName:</label>
                 <input type="text" name="lastname" class="form-control">   <br>

                 <label>Email:</label>
                 <input type="email" name="email" class="form-control">   <br>

                 <label>Mobile:</label>
                 <input type="text" name="mobile" class="form-control">   <br>

                 <button class="btn btn-success" type="Submit" name="submit"> Submit </button>


			</div>
		</form>
	</div>

</body>
</html>