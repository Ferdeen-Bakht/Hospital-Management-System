<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        <a class="navbar-brand" href="#">DOCTORS PROFILE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
            <a class="nav-link" href="d_login.php">Home </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="d_add.php">Upgrade profile</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="d_modify.php">Modify profile</a>
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
    <div class="container">
  <h1 class="mt-5">Modify Profile</h1>
  <button id="add-patient-btn" class="mt-3 btn btn-primary">Modify Attributes</button>
  <div id="patient-cards"></div>
</div>

<!-- Modal -->
<div id="add-patient-modal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Modify Attribute Details</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="patient-name"> Attribute Name:</label>
          <input type="text" class="form-control" id="patient-name">
        </div>
        <div class="form-group">
          <label for="patient-description">Attribute Description:</label>
          <textarea class="form-control" id="patient-description"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="add-patient-attr-btn">Modify Attribute</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


<script>
$(document).ready(function() 
{

  var patientCards = $('#patient-cards');

  
  $('#add-patient-btn').click(function() {
    $('#add-patient-modal').modal('show');
  });

  $('#add-patient-attr-btn').click(function() {
  var patientName = $('#patient-name').val();
  var patientDesc = $('#patient-description').val();

  $.ajax({
    url: 'add_attribute.php',
    type: 'POST',
    data: {
      name: patientName,
      description: patientDesc
    },
    success: function(response) {
      if (response.status == 'success') {

        var card = document.createElement('div');
        card.className = 'card';
        var cardBody = document.createElement('div');
        cardBody.className = 'card-body';
        cardBody.innerHTML = '<h5 class="card-title">' + response.name + '</h5><p class="card-text">' + response.description + '</p>';
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
</html>