<?php
include 'products/productsview.class.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Browse our products</title>
  <!--Bootstrap CDN-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <!--Font Awesome-->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
  </script>
</head>

<body>
<?php include_once("template_header.php");?>
  <div class="container">
  
     <main>
     <div class="album py-5 bg-light">
        <div class="container">
        <div class="form-floating mb-3 mx-auto">
            <h4>Featured Items</h4>
       </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
            <?php 
               $products = new ProductView();
               $results = $products->showProduct(1);
               if (!$results) {echo 'No products avalable at OnlineStore!';}
               foreach($results as $result) :
                  
            ?>
            <div class="col">
              <div class="card shadow-sm">
                  <a href="product_details.php?id=<?php echo $result['id'];?>">
                    <img class="bd-placeholder-img card-img-top" width="100%" height="350"
                         src="images/<?php echo $result['image'];?>" alt="Product-image">
                  </a>
                  <div class="card-body">
                     <a href="product_details.php?id=<?php echo $result['id'];?>">
                        <p class="card-text"><?php echo $result['title'].' R'.$result['price'];?></p>
                     </a>
                    <div class="d-flex justify-content-between align-items-center">
                       <!-- <div class="btn-group">
                          <a class="btn btn-primary" href="product_details.php?id=<?php echo $result['id'];?>" role="button">Add to Cart</a>
                       </div> -->
                       <small
                          class="text-muted"><?php echo $result["quantity"] == 0? "Out of stock": "Instock ".$result["quantity"];?>
                       </small>
                    </div>
                  </div>
              </div>
            </div>
            <?php 
               endforeach; 
            ?>
          </div>
        </div>
     </div>
     </main>
  </div>
  <div>
      <?php include_once("template_footer.php");?>
   </div>
<body>
</html>