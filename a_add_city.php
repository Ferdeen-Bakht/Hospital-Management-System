<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Include jQuery library -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Include Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<!-- Include Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


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
                <a class="nav-link active" href="a_add_city.php">Add Cities</a>
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
              <a class="nav-link" href="a_delete_city.php">Delete Cities</a>
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
      <div class="container">
  <h1 class="mt-5">Add city</h1>
  <button id="add_btn" class="mt-3 btn btn-primary">Add city</button>
  <div id="patient-cards"></div>
</div>

      <!-- Modal -->
<div id="add_modal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Add city</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          Name<br>
          <input type="text" class="form-control" id="name">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="add-patient-attr-btn">Add City</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


<script>
$(document).ready(function() 
{

  var patientCards = $('#patient-cards');

  
  $('#add_btn').click(function() {
    $('#add_modal').modal('show');
  });

  $('#add-patient-attr-btn').click(function() {
  var name = $('#name').val();
  
  $.ajax({
    url: 'a_add_city1.php',
    type: 'POST',
    data: {
      name: name,
      email:email,
      password:password
    },
    success: function(response) {
      if (response.status == 'success') {

        var card = document.createElement('div');
        card.className = 'card';
        var cardBody = document.createElement('div');
        cardBody.className = 'card-body';
        cardBody.innerHTML = '<h5 class="card-title">' + response.name + '</h5>';
        card.appendChild(cardBody);
        patientCards.append(card);


        $('#patient-name').val('');
        $('#patient-description').val('');
        $('#add-patient-modal').modal('hide');
      } else {
        alert('Error: ' + response.message);
      }
    },
    error: function(jqXHR, textStatus, errorThrown) {
      alert('Error: ' + errorThrown);
    }
  });
});

});
</script>
</body>