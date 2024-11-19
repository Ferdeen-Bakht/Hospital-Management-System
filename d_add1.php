<?php

$conn = mysqli_connect('localhost', 'root', '', 'a2');
if (!$conn) {
  die('Error connecting to the database: ' );
}

$name = $_POST['name'];
$description = $_POST['description'];

$query = "INSERT INTO d_att (name, description) VALUES ('$name', '$description')";
$result = mysqli_query($conn, $query);
if (!$result) {
  $response = array('status' => 'error', 'message' => mysqli_error($conn));
} else {
  $response = array('status' => 'success', 'name' => $name, 'description' => $description);
}

mysqli_close($conn);

header('Content-Type: application/json');
echo json_encode($response);
?>
