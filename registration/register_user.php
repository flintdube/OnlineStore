<?php
include('../data_source/db_connection.php');
include('../common/common.php');

if (isset($_POST['register'])) 
{
    $user_type_id        = 2;
    $firstname        = $_POST['firstname'];
    $lastname         = $_POST['lastname'];
    $email            = $_POST['email'];
    $confirm_email    = $_POST['confirm_email'];
    $password         = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $mobile_number    = $_POST['mobile_number'];

    if ($firstname == '' || 
        $lastname == '' ||
        $email == '' || 
        $confirm_email == '' ||
        $password == '' || 
        $confirm_password == '' ||
        $mobile_number == ''
        ) 
    {
        alertError('One or more required fields were left blank.\n'.
              'Please fill them in and retry.');
    }

    try{
       $dbcnx = dbConnect();
       $sql = sprintf(
       "insert into login 
               (user_type_id, username, firstname, lastname, email, mobile, password) 
        values ('$user_type_id','$firstname ','$firstname','$lastname','$email','$mobile_number','$password');");

       $result = mysqli_query($dbcnx, $sql) or die(mysqli_error($dbcnx));

       if($result)
       {
           alertSuccess("$firstname $lastname successfuly registered.");
       }
       else 
       { 
           alertError('User registration not successful.');
       }
    } catch (Exception $e) 
    {        
      print "Error!: " . $e->getMessage() . "<br/>";
      die();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  <title>Register - OnlineStore</title>
</head>
<body>
<form method="post">
  <div class="container">
    <div class="form-floating mb-3 col-4 mx-auto">
        <h4><label for="login">Register</label></h4>
    </div>
    <div class="form-floating mb-3 col-4 mx-auto">
        <input class="form-control" name="firstname" type="text" id="firstname" size="40" required>
        <label for="firstname">Firstname</label>
    </div>
    <div class="form-floating mb-3 col-4 mx-auto">
        <input class="form-control" name="lastname" type="text" id="lastname" size="40" required>
        <label for="lastname">Lastname</label>
    </div>
    <div class="form-floating mb-3 col-4 mx-auto">
        <input class="form-control" name="email" type="email" id="email" size="40" required>
        <label for="email">Email</label>
    </div>
    <div class="form-floating mb-3 col-4 mx-auto">
        <input class="form-control" name="confirm_email" type="email" id="confirm_email" size="40" required>
        <label for="confirm_email">Confirm Email</label>
    </div>
    <div class="form-floating mb-3 col-4 mx-auto">
        <input class="form-control" name="password" type="password" id="password" size="40" required>
        <label for="password">Password</label>
    </div>
    <div class="form-floating mb-3 col-4 mx-auto">
        <input class="form-control" name="confirm_password" type="password" id="confirm_password" size="40" required>
        <label for="confirm_password">Confirm Password</label>
    </div>
    <div class="form-floating mb-3 col-4 mx-auto">
        <input class="form-control" name="mobile_number" type="text" id="mobile_number" size="40" required>
        <label for="mobile_number">Mobile Number</label>
    </div>
    <div class="d-grid gap-2 col-2 mx-auto  mb-3 ">
        <button type="submit" class="btn btn-primary" name="register" id="button">Register Now</button>
    </div>
  <div class="mb-3 col-4 mx-auto">
      <p>By clicking the Register Now, I agree to OnlineStore.com <a class="text-decoration-none" href="../resources/documents/legal.php">Terms and Conditions</a></button>
  </div>
  </div>
</form>
</body>
</html>