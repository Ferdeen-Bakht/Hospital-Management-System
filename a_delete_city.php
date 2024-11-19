<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <!--css-->
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
       integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   
       <!--js-->
       <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
           integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
           crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
           integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
           crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
           integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
           crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Administrator</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item ">
                <a class="nav-link" href="a_home.php">Home</a>
              </li>
            <li class="nav-item">
                <a class="nav-link" href="a_add_city.php">Add Cities</a>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="a_add_doctor.php">Add Doctors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="a_modify_doctor.php">Modify Doctor Details</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="a_modify_patients.php">Modify Patient Details</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="a_delete_city.php">Delete Cities</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="a_delete_doctor.php">Delete Doctors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="a_delete_patients.php">Delete Patients</a>
            </li>
            
            <li class="nav-item">
            <a class="nav-link" href="index.php">Logout</a>
            </li>
          </ul>
        </div>
      </nav>

</body>
<!DOCTYPE html>
<html>
<head>
	<title>Delete Attributes by Name</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h1 class="mt-5">Delete Attributes by Name</h1>
		<form id="delete-attr-form">
			<div class="form-group">
				<label for="name">Enter Name:</label>
				<input type="text" class="form-control" id="name" name="name">
			</div>
			<button type="submit" class="btn btn-danger">Delete Attribute</button>
		</form>
	</div>

	<?php
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$name = $_POST['name'];

		$conn = mysqli_connect('localhost', 'root', '', 'your_database_name');
		if (!$conn) {
			die('Error connecting to the database: ' . mysqli_connect_error());
		}

		$query = "DELETE FROM city WHERE c_name = '$name'";
		$result = mysqli_query($conn, $query);
		if (!$result) {
			echo '<div class="container mt-3"><div class="alert alert-danger">Error: ' . mysqli_error($conn) . '</div></div>';
		} else {
			echo '<div class="container mt-3"><div class="alert alert-success">' . mysqli_affected_rows($conn) . ' attributes with name "' . $name . '" have been deleted.</div></div>';
		}

		mysqli_close($conn);
	}
	?>
</body>
</html>
