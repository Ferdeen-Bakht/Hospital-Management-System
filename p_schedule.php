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
            <a class="nav-link" href="p_home.php">Home </a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="p_schedule.php">Doctors schedules</a>
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
</body>

<?php
$conn = mysqli_connect('localhost', 'root', '', 'a2');
if (!$conn) {
  die('Error connecting to the database: ' . mysqli_connect_error());
}

$query = "SELECT doctor.*, schedule.s_date, schedule.s_time FROM doctor LEFT JOIN schedule ON doctor.d_id = schedule.d_id ORDER BY doctor.d_id";
$result = mysqli_query($conn, $query);
?>

<div class="container">
  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Schedule Date</th>
        <th>Schedule Time</th>
        <th>Book Schedule</th>
      </tr>
    </thead>
    <tbody>
      <?php if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          ?>
          <tr>
            <td><?php echo $row['d_name']; ?></td>
            <td><?php echo $row['d_email']; ?></td>
            <td><?php echo $row['s_date'] ?? "No schedule"; ?></td>
            <td><?php echo $row['s_time'] ?? "No schedule"; ?></td>
            <td>
    <button class="btn btn-primary">Book Schedule</button>
</td>
          </tr>
        <?php }
      } else { ?>
        <tr>
          <td colspan="4">No doctors found.</td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>

<?php mysqli_close($conn); ?>
