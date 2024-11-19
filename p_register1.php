<?php
session_start();

$conn=mysqli_connect("localhost","root","","a2");

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];


$query="insert into patient(p_name,p_email,p_password) values('$name','$email','$password')";

$result=mysqli_query($conn,$query);
$response=array();

if($result)
{
  $response['status']='success';
}
else{
  $response['status']='error';
  $response['message']='Error. Most probably database is not connected
  import it using phpmyadmin';
}
header('Content-Type: application/json');
echo json_encode($response);
?>