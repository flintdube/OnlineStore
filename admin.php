<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
   <title>Admin</title>
</head>
<body>
<form action="">
   <div class="container">
   <?php
    session_start();
    if (isset($_SESSION['name'])) 
    {
        if ((time() - $_SESSION['last_login_timestamp']) > 120) // 2 * 60 mins
        {
          header('location:logout.php');
        }
        else
        {
          $_SESSION['last_login_timestamp'] = time();
          echo "<h4>Logged in as ". $_SESSION['name'] ."</h4>";
          echo "<p><a href='logout.php'>Logout</a></p>";
        }
    } else 
    {
      header('location:login.php');
    }
    ?>

    
    admin must be able to view | insert | update | invetory

    tables 
    product
    product_history
   </div></form>
</body>
</html>