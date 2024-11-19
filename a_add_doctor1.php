<?php

$conn = mysqli_connect('localhost', 'root', '', 'a2');
if (!$conn) {
  die('Error connecting to the database: ' );
}

$name = $_POST['name'];
$email = $_POST['email'];
$password=$_POST['password'];

$query = "INSERT INTO doctor (d_name,d_email,d_password ) VALUES ('$name', '$email','$password')";
$result = mysqli_query($conn, $query);
if (!$result) {
  $response = array('status' => 'error', 'message' => mysqli_error($conn));
} else {
  $response = array('status' => 'success', 'name' => $name, 'email' => $email);
}

mysqli_close($conn);

header('Content-Type: application/json');
echo json_encode($response);
?>