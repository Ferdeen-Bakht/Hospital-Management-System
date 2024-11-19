<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<div class="container">

  <?php if (isset($error_message)) { ?>
    <div class="alert alert-danger"><?php echo $error_message; ?></div>
  <?php } ?>

  <body>
    <div class="container mt-5">
      <div class="row justify-content-center">
        <div class="col-md-4">
          <div class="card">
            <div class="card-header">
              <h4 class="text-center">Patient Signup</h4>
            </div>
            <div class="card-body">
              <form id="signup-form" method="post">
                <div class="form-group">
                  <label for="name">Name:</label>
                  <input type="text" id="name" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="email" id="email" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="password">Password:</label>
                  <input type="password" id="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Signup</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>

</div>

<script>
$(document).ready(function() {
  $('#signup-form').submit(function(event) {
    event.preventDefault();

    var name = $('#name').val();
    var email = $('#email').val();
    var password = $('#password').val();


    $.ajax({
      url: 'p_register1.php',
      type: 'post',
      data: {
        name: name,
        email: email,
        password: password
      },
      dataType: 'json',
      success: function(response) {
        if (response.status == 'success') {
          window.location.href = 'p_signin.php';
        } else {
          alert(response.message);
        }
      },
      error: function(xhr, status, error) {
        console.error(xhr.responseText);
        alert('An error occurred while processing your request. Please try again later.');
      }
    });
  });
});
</script>