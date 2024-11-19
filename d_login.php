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
        <a class="navbar-brand" href="#">DOCTORS PROFILE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
            <a class="nav-link active" href="d_login.php">Home </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="d_add.php">Upgrade profile</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Modify profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="d_appointments.php">Appointments</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="d_schedule.php">Schedule</a>
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
          <h5 class="card-title font-weight-bold mb-4">Doctors Information</h5>
          <p class="card-text mb-0"><span class="font-weight-bold">Name:</span> <?php echo isset($_SESSION['p_name']) ? $_SESSION['p_name'] : ''; ?></p>
          <hr class="my-2">
          <p class="card-text mb-0"><span class="font-weight-bold">Email:</span> <?php echo isset($_SESSION['p_email']) ? $_SESSION['p_email'] : ''; ?></p>
        </div>
      </div>
      <div class="col-md-4">
        <img src="https://img.freepik.com/free-photo/pleased-young-female-doctor-wearing-medical-robe-stethoscope-around-neck-standing-with-closed-posture_409827-254.jpg" class="card-img h-100" alt="...">
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