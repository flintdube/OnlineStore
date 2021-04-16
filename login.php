<?php
include('./data_source/db_connection.php');
include('./common/common.php');

if (isset($_POST['login'])) 
{
    $user = $_POST['username'];
    $pass = $_POST['password'];

    if ($user == '' || $pass == '') 
    {
        alertError('One or more required fields were left blank.\n'.
              'Please fill them in and retry.');
    }

    try {
        $dbcnx = dbConnect();
        $query = mysqli_query($dbcnx, "select distinct * from user_login where username = '$user' and password = '$pass'");
        if (!$query) 
        {
            alertError('A daabase error occured in processing your request.');
        }

        $result = mysqli_fetch_array($query, MYSQLI_ASSOC) or die(mysqli_error($dbcnx));

        if (mysqli_num_rows($query) == 0) { //needs more testing
            alertError('Invalid username and password!');
        }

        $username = $result['username'];
        $password = $result['password'];
        $userType = $result['user_type'];

       if ($user == $username && $pass == $password) 
       {
           session_start();
           $_SESSION['name']= $username;
           $_SESSION['last_login_timestamp']= time();
         
           if ($userType == "admin") 
           {
            header('location:admin.php');
           } 
           elseif($userType == "user") 
           {
            header('location:user.php');
           } 
           else 
           {
            header('location:guest.php');
           }
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
    <title>Login</title>
</head>
<body>
   <form method="post" action="<?=$_SERVER['PHP_SELF']?>">
       <div class="container">
           <div class="form-floating mb-3 col-4 mx-auto">
                <h4><label for="login">Login</label></h4>
           </div>
           <div class="form-floating mb-3 col-4 mx-auto">
                <input class="form-control" name="username" type="text" id="username" size="40">
                <label for="username">Username</label>
           </div>
           <div class="form-floating mb-3 col-4 mx-auto">
                <input class="form-control" name="password" type="password" id="password" size="40">
                <label for="password">Password</label>
           </div>
           <div class="mb-3 col-4 mx-auto">
                <p><a class="text-decoration-none" href="forgot_password.php">Forgot password?</label></p>
           </div>
           <div class="d-grid gap-2 col-2 mx-auto  mb-3 ">
                <button type="submit" class="btn btn-primary" name="login" id="login">Login</button>
           </div>
           <div class="mb-3 col-4 mx-auto">
                <p>New to OnlineStore? <a class="text-decoration-none" href="user_account/register_user.php">Create account</a></p>
            </div>
       </div>
   </form>    
</body>
</html>