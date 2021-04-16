<?php
//use prepared statemenst
function dbConnect() 
{
   $db_host = "localhost";
   $db_name = "mystore";
   $dbcnx = mysqli_connect($db_host, "root", "root") or die("The database site '$db_host' is not reachable.");
   if (!mysqli_select_db($dbcnx, $db_name)) 
   {
      die("Unable to mount '$db_name' database.");
   }
   return $dbcnx;
}

function dbClose() 
{
   $conn -> close();
}

?>