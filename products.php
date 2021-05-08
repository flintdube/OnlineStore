<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Cart Page</title>
   <!--Bootstrap CDN-->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
   <!--Font Awesome-->
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
   <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script> 
   <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">  

<nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-between">
    <a class="navbar-brand" href="index.php">
      <img src="logo.svg" width="30" height="30" alt="">
      OnlineStore
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./registration/register_user.php">Register</a>
        </li>
		        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0" action="">
        <input type="form-control mr-sm-2" type ="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0 my-sm-0" type ="submit">Search</button>
      </form>
    </div>
  </nav>
   
   <div class="row text-center py-5">
               
    <div class="col-md-3 col-sm-6 my-3 my-md-0">
        <form action="index.php" method="post">
           <div class="shadow">
           <div>
              <img src="images/product-01.jpg" alt="product1" class="img-fluid card-img-top">
           </div>
           <div class="card-body">
              <h5 class="card-title">Scrub Set</h5>
              <h6>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="far fa-star"></i>
              </h6>
              <p class="card-text">
              Made from high quality polyester-spandex, 
              our scrubs are soft and smooth on the skin
              for all day comfort. Slim fit unisex cut with
              a light stretch. Available in jogger bottoms.
              </p>
              <h5>
                 <span class="price">R450</span>
              </h5>
              <button type="submit" class="btn btn-warning my3" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button>
           </div>
           </div>
        </form>
         </div>
         <div class="col-md-3 col-sm-6 my-3 my-md-0">
         <form action="index.php" method="post">
           <div class="shadow">
           <div>
              <img src="images/product-02.jpg" alt="product2" class="img-fluid card-img-top">
           </div>
           <div class="card-body">
              <h5 class="card-title">Scrub Set</h5>
              <h6>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="far fa-star"></i>
              </h6>
              <p class="card-text">
              Made from high quality polyester-spandex, 
              our scrubs are soft and smooth on the skin
              for all day comfort. Slim fit unisex cut with
              a light stretch. Available in jogger bottoms.
              </p>
              <h5>
                 <span class="price">R450</span>
              </h5>
              <button type="submit" class="btn btn-warning my3" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button>
           </div>
           </div>
        </form>
      </div>
      <div class="col-md-3 col-sm-6 my-3 my-md-0">
      <form action="index.php" method="post">
           <div class="shadow">
           <div>
              <img src="images/product-03.jpg" alt="product3" class="img-fluid card-img-top">
           </div>
           <div class="card-body">
              <h5 class="card-title">Scrub Set</h5>
              <h6>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="far fa-star"></i>
              </h6>
              <p class="card-text">
              Made from high quality polyester-spandex, 
              our scrubs are soft and smooth on the skin
              for all day comfort. Slim fit unisex cut with
              a light stretch. Available in jogger bottoms.
              </p>
              <h5>
                 <span class="price">R450</span>
              </h5>
              <button type="submit" class="btn btn-warning my3" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button>
           </div>
           </div>
        </form>
      </div>
   
   <div class="col-md-3 col-sm-6 my-3 my-md-0">
   <form action="index.php" method="post">
           <div class="shadow">
           <div>
              <img src="images/product-04.jpg" alt="product4" class="img-fluid card-img-top">
           </div>
           <div class="card-body">
              <h5 class="card-title">Scrub Set</h5>
              <h6>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="far fa-star"></i>
              </h6>
              <p class="card-text">
              Made from high quality polyester-spandex, 
              our scrubs are soft and smooth on the skin
              for all day comfort. Slim fit unisex cut with
              a light stretch. Available in jogger bottoms.
              </p>
              <h5>
                 <span class="price">R450</span>
              </h5>
              <button type="submit" class="btn btn-warning my3" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button>
           </div>
           </div>
        </form>
   </div>
</div>

<!--row 2-->
<div class="container">
      <div class="row text-center py-5">
         <div class="col-md-3 col-sm-6 my-3 my-md-0">
        <form action="index.php" method="post">
           <div class="shadow">
           <div>
              <img src="images/product-05.jpg" alt="product5" class="img-fluid card-img-top">
           </div>
           <div class="card-body">
              <h5 class="card-title">Scrub Top</h5>
              <h6>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="far fa-star"></i>
              </h6>
              <p class="card-text">
              Made from high quality polyester-spandex, 
              our scrubs are soft and smooth on the skin
              for all day comfort. Slim fit unisex cut with
              a light stretch. Available in different sizes. 
              </p>
              <h5>
                 <span class="price">R450</span>
              </h5>
              <button type="submit" class="btn btn-warning my3" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button>
           </div>
           </div>
        </form>
         </div>
         <div class="col-md-3 col-sm-6 my-3 my-md-0">
         <form action="index.php" method="post">
           <div class="shadow">
           <div>
              <img src="images/product-06.jpg" alt="product6" class="img-fluid card-img-top">
           </div>
           <div class="card-body">
              <h5 class="card-title">Scrub Set</h5>
              <h6>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="far fa-star"></i>
              </h6>
              <p class="card-text">
              Made from high quality polyester-spandex, 
              our scrubs are soft and smooth on the skin
              for all day comfort. Slim fit unisex cut with
              a light stretch. Available in jogger bottoms.
              </p>
              <h5>
                 <span class="price">R450</span>
              </h5>
              <button type="submit" class="btn btn-warning my3" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button>
           </div>
           </div>
        </form>
      </div>
      <div class="col-md-3 col-sm-6 my-3 my-md-0">
      <form action="index.php" method="post">
           <div class="shadow">
           <div>
              <img src="images/product-07.jpg" alt="product7" class="img-fluid card-img-top">
           </div>
           <div class="card-body">
              <h5 class="card-title">Scrub Set</h5>
              <h6>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="far fa-star"></i>
              </h6>
              <p class="card-text">
              Made from high quality polyester-spandex, 
              our scrubs are soft and smooth on the skin
              for all day comfort. Slim fit unisex cut with
              a light stretch. Available in jogger bottoms.
              </p>
              <h5>
                 <span class="price">R450</span>
              </h5>
              <button type="submit" class="btn btn-warning my3" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button>
           </div>
           </div>
        </form>
      </div>
   
   <div class="col-md-3 col-sm-6 my-3 my-md-0">
   <form action="index.php" method="post">
           <div class="shadow">
           <div>
              <img src="images/product-08.jpg" alt="product8" class="img-fluid card-img-top">
           </div>
           <div class="card-body">
              <h5 class="card-title">Scrub Top (White)</h5>
              <h6>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="far fa-star"></i>
              </h6>
              <p class="card-text">
              Made from high quality polyester-spandex, 
              our scrubs are soft and smooth on the skin
              for all day comfort. Slim fit unisex cut with
              a light stretch. Available in different sizes.
              </p>
              <h5>
                 <span class="price">R450</span>
              </h5>
              <button type="submit" class="btn btn-warning my3" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button>
           </div>
           </div>
        </form>
   </div>
</div>

<!--Row 3-->
<div class="container">
      <div class="row text-center py-5">
         <div class="col-md-3 col-sm-6 my-3 my-md-0">
        <form action="index.php" method="post">
           <div class="shadow">
           <div>
              <img src="images/product-09.jpg" alt="product9" class="img-fluid card-img-top">
           </div>
           <div class="card-body">
              <h5 class="card-title">Tees</h5>
              <h6>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="far fa-star"></i>
              </h6>
              <p class="card-text">
              Made from 100% cotton, our comfortable T-shirts 
              make a statement about your professional identity. 
              Vision Sqaud is only available in Ladies cuts. 
              </p>
              <h5>
                 <span class="price">R200</span>
              </h5>
              <button type="submit" class="btn btn-warning my3" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button>
           </div>
           </div>
        </form>
         </div>
         <div class="col-md-3 col-sm-6 my-3 my-md-0">
         <form action="index.php" method="post">
           <div class="shadow">
           <div>
              <img src="images/product-10.jpg" alt="product10" class="img-fluid card-img-top">
           </div>
           <div class="card-body">
              <h5 class="card-title">Tees</h5>
              <h6>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="far fa-star"></i>
              </h6>
              <p class="card-text">
              Made from 100% cotton, our comfortable 
              Tshirts make a statement about your 
              professional identity. Red ‘Eye Love’ only unisex cuts.
              </p>
              <h5>
                 <span class="price">R200</span>
              </h5>
              <button type="submit" class="btn btn-warning my3" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button>
           </div>
           </div>
        </form>
      </div>
      <div class="col-md-3 col-sm-6 my-3 my-md-0">
      <form action="index.php" method="post">
           <div class="shadow">
           <div>
              <img src="images/product-11.jpg" alt="product11" class="img-fluid card-img-top">
           </div>
           <div class="card-body">
              <h5 class="card-title">Tees</h5>
              <h6>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="far fa-star"></i>
              </h6>
              <p class="card-text">
              Made from 100% cotton, our comfortable 
              Tshirts make a statement about your 
              professional identity. Red ‘Eye Love’ only unisex cuts.
              </p>
              <h5>
                 <span class="price">R200</span>
              </h5>
              <button type="submit" class="btn btn-warning my3" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button>
           </div>
           </div>
        </form>
      </div>
   
   <div class="col-md-3 col-sm-6 my-3 my-md-0">
   <form action="index.php" method="post">
           <div class="shadow">
           <div>
              <img src="images/product-12.jpg" alt="product12" class="img-fluid card-img-top">
           </div>
           <div class="card-body">
              <h5 class="card-title">Tees</h5>
              <h6>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="far fa-star"></i>
              </h6>
              <p class="card-text">
              Made from 100% cotton, our comfortable 
              Tshirts make a statement about your 
              professional identity. Red ‘Eye Love’ only unisex cuts.
              </p>
              <h5>
                 <span class="price">R200</span>
              </h5>
              <button type="submit" class="btn btn-warning my3" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button>
           </div>
           </div>
        </form>
   </div>
</div>

<!--Row 4-->
<div class="container">
      <div class="row text-center py-5">
         <div class="col-md-3 col-sm-6 my-3 my-md-0">
        <form action="index.php" method="post">
           <div class="shadow">
           <div>
              <img src="images/mask-1.jpg" alt="mask1" class="img-fluid card-img-top">
           </div>
           <div class="card-body">
              <h5 class="card-title">Mask</h5>
              <h6>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="far fa-star"></i>
              </h6>
              <p class="card-text">
              Made from soft microfibre fabric these are 
              triple-layered for your protection.  
              </p>
              <h5>
                 <span class="price">R50</span>
              </h5>
              <button type="submit" class="btn btn-warning my3" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button>
           </div>
           </div>
        </form>
         </div>
         <div class="col-md-3 col-sm-6 my-3 my-md-0">
         <form action="index.php" method="post">
           <div class="shadow">
           <div>
              <img src="images/mask-2.jpg" alt="mask2" class="img-fluid card-img-top">
           </div>
           <div class="card-body">
              <h5 class="card-title">Mask</h5>
              <h6>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="far fa-star"></i>
              </h6>
              <p class="card-text">
              Made from soft microfibre fabric these 
              are triple-layered for your protection. 
              </p>
              <h5>
                 <span class="price">R50</span>
              </h5>
              <button type="submit" class="btn btn-warning my3" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button>
           </div>
           </div>
        </form>
      </div>
      <div class="col-md-3 col-sm-6 my-3 my-md-0">
      <form action="index.php" method="post">
           <div class="shadow">
           <div>
              <img src="images/accessories-2.jpg" alt="earings" class="img-fluid card-img-top">
           </div>
           <div class="card-body">
              <h5 class="card-title">Earings</h5>
              <h6>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="far fa-star"></i>
              </h6>
              <p class="card-text">
              Light earings, measuring 5.5cm in diameter, 
              with a 7cm drop.
              </p>
              <h5>
                 <span class="price">R100</span>
              </h5>
              <button type="submit" class="btn btn-warning my3" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button>
           </div>
           </div>
        </form>
      </div>
   
   <div class="col-md-3 col-sm-6 my-3 my-md-0">
   <form action="index.php" method="post">
           <div class="shadow">
           <div>
              <img src="images/accessory-1.jpg" alt="Cushion" class="img-fluid card-img-top">
           </div>
           <div class="card-body">
              <h5 class="card-title">Cushion</h5>
              <h6>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="far fa-star"></i>
              </h6>
              <p class="card-text">
              Made from 100% cotton, our comfortable 
              Tshirts make a statement.  
              </p>
              <h5>
                 <span class="price">R150</span>
              </h5>
              <button type="submit" class="btn btn-warning my3" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button>
           </div>
           </div>
        </form>
   </div>
</div>
   
<!--Row 5-->
<div class="container">
      <div class="row text-center py-5">
         <div class="col-md-3 col-sm-6 my-3 my-md-0">
        <form action="index.php" method="post">
           <div class="shadow">
           <div>
              <img src="images/vest-1.jpg" alt="vest1" class="img-fluid card-img-top">
           </div>
           <div class="card-body">
              <h5 class="card-title">Vest</h5>
              <h6>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="far fa-star"></i>
              </h6>
              <p class="card-text">
              Made from soft microfibre fabric these are 
              triple-layered for your protection.  
              </p>
              <h5>
                 <span class="price">R100</span>
              </h5>
              <button type="submit" class="btn btn-warning my3" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button>
           </div>
           </div>
        </form>
         </div>
         <div class="col-md-3 col-sm-6 my-3 my-md-0">
         <form action="index.php" method="post">
           <div class="shadow">
           <div>
              <img src="images/vest-2.jpg" alt="vest2" class="img-fluid card-img-top">
           </div>
           <div class="card-body">
              <h5 class="card-title">Vest</h5>
              <h6>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="far fa-star"></i>
              </h6>
              <p class="card-text">
              Made from soft microfibre fabric these 
              are triple-layered for your protection. 
              </p>
              <h5>
                 <span class="price">R100</span>
              </h5>
              <button type="submit" class="btn btn-warning my3" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button>
           </div>
           </div>
        </form>
      </div>
      <div class="col-md-3 col-sm-6 my-3 my-md-0">
      <form action="index.php" method="post">
           <div class="shadow">
           <div>
              <img src="images/vest-3.jpg" alt="vest3" class="img-fluid card-img-top">
           </div>
           <div class="card-body">
              <h5 class="card-title">Vest</h5>
              <h6>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="far fa-star"></i>
              </h6>
              <p class="card-text">
              Made from soft microfibre fabric these 
              are triple-layered for your protection. 
              </p>
              <h5>
                 <span class="price">R100</span>
              </h5>
              <button type="submit" class="btn btn-warning my3" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button>
           </div>
           </div>
        </form>
      </div>
   
   <div class="col-md-3 col-sm-6 my-3 my-md-0">
   <form action="index.php" method="post">
           <div class="shadow">
           <div>
              <img src="images/vest-4.jpg" alt="Vest" class="img-fluid card-img-top">
           </div>
           <div class="card-body">
              <h5 class="card-title">Vest</h5>
              <h6>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="far fa-star"></i>
              </h6>
              <p class="card-text">
              Made from soft microfibre fabric these 
              are triple-layered for your protection. 
              </p>
              <h5>
                 <span class="price">R100</span>
              </h5>
              <button type="submit" class="btn btn-warning my3" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button>
           </div>
           </div>
        </form>
   </div>
</div>

<!--Row 6-->
<div class="container">
      <div class="row text-center py-5">
         <div class="col-md-3 col-sm-6 my-3 my-md-0">
        <form action="index.php" method="post">
           <div class="shadow">
           <div>
              <img src="images/vest-5.jpg" alt="vest5" class="img-fluid card-img-top">
           </div>
           <div class="card-body">
              <h5 class="card-title">Vest</h5>
              <h6>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="far fa-star"></i>
              </h6>
              <p class="card-text">
              Made from soft microfibre fabric these are 
              triple-layered for your protection.  
              </p>
              <h5>
                 <span class="price">R100</span>
              </h5>
              <button type="submit" class="btn btn-warning my3" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button>
           </div>
           </div>
        </form>
         </div>
         <div class="col-md-3 col-sm-6 my-3 my-md-0">
         <form action="index.php" method="post">
           <div class="shadow">
           <div>
              <img src="images/clinical_tote.png" alt="Tote Bags" class="img-fluid card-img-top">
           </div>
           <div class="card-body">
              <h5 class="card-title">Tote Bags</h5>
              <h6>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="far fa-star"></i>
              </h6>
              <p class="card-text">
              Made from soft microfibre fabric these 
              are triple-layered for your protection. 
              </p>
              <h5>
                 <span class="price">R100</span>
              </h5>
              <button type="submit" class="btn btn-warning my3" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button>
           </div>
           </div>
        </form>
      </div>
      <div class="col-md-3 col-sm-6 my-3 my-md-0">
      <form action="index.php" method="post">
           <div class="shadow">
           <div>
              <img src="images/pouch.png" alt="pouch" class="img-fluid card-img-top">
           </div>
           <div class="card-body">
              <h5 class="card-title">Cosmetic Bag (Yellow eye design)</h5>
              <h6>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="far fa-star"></i>
              </h6>
              <p class="card-text">
              Made from soft microfibre fabric these 
              are triple-layered for your protection. 
              </p>
              <h5>
                 <span class="price">R120</span>
              </h5>
              <button type="submit" class="btn btn-warning my3" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button>
           </div>
           </div>
        </form>
      </div>
   
   <div class="col-md-3 col-sm-6 my-3 my-md-0">
   <form action="index.php" method="post">
           <div class="shadow">
           <div>
              <img src="images/pouch.png" alt="Pouch" class="img-fluid card-img-top">
           </div>
           <div class="card-body">
              <h5 class="card-title">Cosmetic Bag (Blue Artwork)</h5>
              <h6>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="far fa-star"></i>
              </h6>
              <p class="card-text">
              Made from soft microfibre fabric these 
              are triple-layered for your protection. 
              </p>
              <h5>
                 <span class="price">R80</span>
              </h5>
              <button type="submit" class="btn btn-warning my3" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button>
           </div>
           </div>
        </form>
   </div>
</div>

</body>
</html>