<!DOCTYPE html PUBLIC"-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmins="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
    <title>Store Home Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./css/common.css" type="text/css" media="screen"/>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;500;600;700&display=swap" 
rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="js/common.js" defer></script>
</head>
<body>
<div class="header">
    <div class="container">
        <div class ="navbar">
				 <?php include_once("template_header.php");?>
        </div>
          <div class="row" id="target">
            <div class="col-2">
                <h1>Welcome to our online store! <br> Esy is all about spreading Eye Love.</h1>
                <p>We invite you to browse our product range and trust that you will find 
                    something here that you Love too. Happy Shopping! </p>
                    <a href="" class="btn">Explore Now &#8594;</a>
            </div>
            <div class="col-2">
               <img src="images/cover.jpg"> 
            </div>
        </div>
    </div>
</div>   


<div>
  <?php include_once("template_footer.php");?>
</div>


</body>
</html>
