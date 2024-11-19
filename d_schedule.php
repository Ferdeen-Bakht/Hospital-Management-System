<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Schedule</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- FullCalendar CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

    <!-- Popper.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Moment.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

    <!-- FullCalendar JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
    
    <!-- Calendar initialization -->
    <script>
        $(document).ready(function() {
            $('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
                defaultView: 'month',
                editable: true,
                events: [
                ]
            });
        });
    </script>
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
                    <a class="nav-link" href="d_login.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="d_add.php">Upgrade profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="d_modify.php">Modify profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="d_appointments.php">Appointments</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="d_schedule.php">Schedule</a>
                </li>
                <li class="nav-item">
            <a class="nav-link" href="index.php">Logout</a>
            </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center">Doctor Schedule</h4>
                        </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group row">
                                <label for="doctor" class="col-md-4 col-form-label text-md-right">Doctor</label>

                                <div class="col-md-6">
                                <input type="text" id="name" name="name" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="date" class="col-md-4 col-form-label text-md-right">Date</label>

                            <div class="col-md-6">
                                <input id="date" type="date" class="form-control" name="date">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="time" class="col-md-4 col-form-label text-md-right">Time</label>

                            <div class="col-md-6">
                                <input id="time" type="time" class="form-control" name="time">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$conn = mysqli_connect('localhost', 'root', '', 'a2');
if (!$conn) {
    die('Error connecting to the database: ' . mysqli_connect_error());
}

$doctor = $_POST['doctor'];
$query = "SELECT d_id FROM doctor WHERE d_email='$doctor'";
$result = mysqli_query($conn, $query);
if (!$result) {
    die('Error: ' . mysqli_error($conn));
}
$row = mysqli_fetch_assoc($result);
$p_id = $row['p_id'];


$date = $_POST['date'];
$time = $_POST['time'];
$name = $_POST['name'];

$query = "INSERT INTO schedule (p_id, s_date, s_time, s_name) VALUES ($p_id, '$date', '$time', '$name')";
$result = mysqli_query($conn, $query);
if (!$result) {
    die('Error: ' . mysqli_error($conn));
}

mysqli_close($conn);

exit();
?>