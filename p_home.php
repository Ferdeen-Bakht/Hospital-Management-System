<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">PATIENTS PROFILE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
            <a class="nav-link active" href="p_home.php">Home </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="p_schedule.php">Doctors schedules</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="p_booked.php">Booked appointements</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="index.php">Logout</a>
            </li>
        </ul>
        </div>

    </nav>
<?php
  session_start();
  
?>  
<div class="container my-5">
  <div class="card shadow-lg">
    <div class="row no-gutters">
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title font-weight-bold mb-4">Patient Information</h5>
          <p class="card-text mb-0"><span class="font-weight-bold">Name:</span> <?php echo isset($_SESSION['p_name']) ? $_SESSION['p_name'] : ''; ?></p>
          <hr class="my-2">
          <p class="card-text mb-0"><span class="font-weight-bold">Email:</span> <?php echo isset($_SESSION['p_email']) ? $_SESSION['p_email'] : ''; ?></p>
        </div>
      </div>
      <div class="col-md-4">
        <img src="https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F6%2F2018%2F01%2Fbreaking-bad-pilot-6.jpg" class="card-img h-100" alt="...">
      </div>
    </div>
  </div>
</div>

</body>
</html>
<?php
if(!isset($_SESSION['p_email']) && (!isset($_SESSION['p_passwword'])))
{
  header('Location:p_signin.php');
  exit();
}
?>