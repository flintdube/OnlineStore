<?php
function alertSuccess($msg) {
  ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
  </head>
  <body>
  <script language="JavaScript">
    alert("<?=$msg?>");
    history.back();
    </script>
  </body>
  </html>
  <?php
    exit;
  }

  function simpleAlertSuccess($msg) {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
    <script language="JavaScript">
      alert("<?=$msg?>");
      </script>
    </body>
    </html>
    <?php
      exit;
    }

function alertError($msg) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
</head>
<body>
<script language="JavaScript">
  alert("<?=$msg?>");
  history.back();
  </script>
</body>
</html>
<?php
  exit;
}
?>