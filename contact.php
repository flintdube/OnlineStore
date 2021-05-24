<?php
include_once('template_header.php');
?>


<?php
$message_sent= false;
if(isset($_POST['email']) && $_POST['email']!= ''){
	
	if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
		//submit the form
		$userName=$_POST['name'];
		$userEmail=$_POST['email'];
		$messageSubject=$_POST['subject'];
		$message=$_POST['message'];
		
		$to="mailingtest147@gmail.com";
		$body="";
		
		$body .="From: ".$userName. "\r\n";
		$body .="Email: ".$userEmail. "\r\n";
		$body .="Message: ".$message. "\r\n";
		
		mail($to,$messageSubject,$body);
		
		$message_sent = true;
		
	}
	
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Contact Form</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;500;600;700&display=swap" rel="stylesheet">  
  <link rel="stylesheet" href="./css/common.css" type="text/css" media="screen"/>
</head>
<body>
<?php
if($message_sent):
?>
<h3>Thanks, we'll get in touch</h3>

<?php
else:
?>


  <form action="contact.php" method="POST" class="form">
           <div class="form-floating mb-3 col-4 mx-auto">
                <h4><label for="login">Contact us</label></h4>
				<p> Feel free to contact us during business hours.</p>
           </div>
      <div class="form-floating mb-3 col-4 mx-auto">
        <input class="form-control" name="firstname" type="text" id="firstname" size="40" required>
        <label for="firstname">Your Name</label>
    </div>
	
	    <div class="form-floating mb-3 col-4 mx-auto">
        <input class="form-control" name="firstname" type="text" id="firstname" size="40" required>
        <label for="firstname">Your Email</label>
    </div>
	
	    <div class="form-floating mb-3 col-4 mx-auto">
        <input class="form-control" name="firstname" type="text" id="firstname" size="40" required>
        <label for="firstname">Subject</label>
    </div>
	
	    <div class="form-floating mb-3 col-4 mx-auto">
        <textarea rows="5" cols="50" class="form-control" id="message" name="message" placeholder="Enter your text here..."
  tabIndex="4"></textarea>
        <label for="firstname">Message</label>
    </div>
	

  <div class="d-grid gap-2 col-2 mx-auto  mb-3 ">
    <button class="btn" type="submit">Send Message!</button>
  </div>
  </form> 
     
 
   <?php
   endif;
   ?>

</body>
</html>