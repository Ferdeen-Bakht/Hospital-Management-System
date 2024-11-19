<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hospital Management System</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <!-- Custom CSS -->
  <style>
    body {
      background-image: url('https://images.pexels.com/photos/40568/medical-appointment-doctor-healthcare-40568.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
    }
    .btn-custom {
      background-color: #007bff;
      color: #fff;
    }
  </style>
</head>
<body>

<button type="button" class="m-3 btn btn-danger" data-toggle="modal" data-target="#helpModal" style=" position: absolute; top: 0; right: 0;">HELP</button>
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3 text-center mt-5">
        <h1 class="text-dark mb-4">Hospital Management System</h1>
        <a href="a_login.php" class="btn btn-danger btn-lg btn-block mb-3">Administrator Login</a>
        <a href="d_login1.php" class="btn btn-danger btn-lg btn-block mb-3">Doctor Login</a>
        <a href="p_signin.php" class="btn btn-danger btn-lg btn-block mb-3">Patient Login</a>
        <a href="p_register.php" class="btn btn-danger btn-lg btn-block mb-3">Patient Sign Up</a>
      </div>
    </div>
  </div>

  <!-- Help Modal -->
  <div class="modal fade" id="helpModal" tabindex="-1" role="dialog" aria-labelledby="helpModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="helpModalLabel">Help</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>If you need help with the Hospital Management System, please contact our support team at support@hospital.com or call us at +1-800-123-4567.<br>
          <br><br>Admin name is admin<br>
          Admin password is also admin<br>
          Please import the sql file to phpmyadmin for login and signup for patient and doctor
        </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>


  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>








