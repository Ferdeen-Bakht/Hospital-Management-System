<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Administrator Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body >
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center">Doctor Login</h4>
                    </div>
                    <div class="card-body">
                        <form action="d_login.php" method="post">
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>



<?php
  session_start();
  $conn=mysqli_connect("localhost","root","","a2");
  

  @$email=$_POST['email'];
  @$password=$_POST['password'];
  
  $query="select * from doctor where d_email='$email' and d_password='$password'";
  
  $result=mysqli_query($conn,$query);//query only executes after this statment

  if (!$result) {
    die('');
  }

    if(mysqli_num_rows($result)==1)
    {
      $row=mysqli_fetch_assoc($result);
      $_SESSION['p_name']=$row['p_name'];
      $_SESSION['p_email']=$row['p_email'];
      $_SESSION['p_password']=$row['p_password'];
      header('Location: d_login.php');
    }
    else
    {
      echo "<script>alert('Invalid Input')</script>";
    }
?>