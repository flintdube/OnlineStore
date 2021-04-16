<?php
include('./data_source/db_connection.php');
include('./common/common.php');

if(isset($_POST['reset_password'])) 
{
  $email = $_POST['email'];

  if ($email == '') 
  {
      alertError('One or more required fields were left blank.\n'.
            'Please fill them in and retry.');
  }
  
  $dbcnx = dbConnect();
  $select_query = mysqli_query($dbcnx, "select distinct * from user_login where email = '$email'");
  if (!$select_query) 
  {
      alertError('A daabase error occured in processing your request.');
  }
 
  $select_result = mysqli_fetch_array($select_query, MYSQLI_ASSOC) or die(mysqli_error($dbcnx));
  $user_id = $select_result['id'];
  $user_email = $select_result['email'];

  if ($email == $user_email) {
    //generate random password and send email
     $generated_Password = "12345";
    //if sent, then update password
    $update_query = mysqli_query($dbcnx, "update user_login set password = '$generated_Password' where id = '$user_id' and email = '$user_email'");
    if (!$update_query) 
    {
      alertError('A daabase error occured in processing your request.');
    }

    $to = $user_email;
    $subject = "OnlineStore password reset";
    
    $message = "<b>This is HTML message.</b>";
    $message .= "<h5>Your new password is: $generated_Password </h5>";

    $header = "From: noreply@onlinestore.co.za \r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html\r\n";

    if (mail($to, $subject, $message, $header))
    {
        alertSuccess('Password reset successful.\n'.
                       'A new password has been sent to '. $user_email);
    } 
    else 
    {
        echo 'Error sending email';
    }
   

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
  <title>Forgot password</title>
</head>
<body>
<form method="post" action="<?=$_SERVER['PHP_SELF']?>">
<div class="container">
           <div class="form-floating mb-3 col-4 mx-auto">
                <h4><label for="login">Reset your password</label></h4>
           </div>
           <div class="form-floating mb-3 col-4 mx-auto">
                <input class="form-control" name="email" type="text" id="email" size="40">
                <label for="username">Please enter your registered email address</label>
           </div>
           <div class="d-grid gap-2 col-2 mx-auto  mb-3 ">
                <button type="submit" class="btn btn-primary" name="reset_password" id="reset_password">Reset password</button>
           </div>
           </div>
  </form>
</body>
</html>