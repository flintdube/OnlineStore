<?php
session_start();
$product_ids = array();
//session_destroy();

//check if Add to cart button has been submitted
if(filter_input(INPUT_POST, 'add_to_cart')){
   if(isset($_SESSION['shopping_cart'])){
    //Keep track of how many products are in shopping cart
	$count = count($_SESSION['shopping_cart']);
	
	//create sequential array for matching array keys to products id's
	$product_ids = array_column($_SESSION['shopping_cart'], 'id');
	
	if (!in_array(filter_input(INPUT_GET, 'id'), $product_ids)){
		$_SESSION['shopping_cart'][$count] = array
		(
		   'id' => filter_input(INPUT_GET, 'id'),
           'name' => filter_input(INPUT_POST, 'name'),
           'price' => filter_input(INPUT_POST, 'price'),
           'quantity' => filter_input(INPUT_POST, 'quantity')
   );
	}
	else{//product already exists, increase quantity
	     //match array key to id of the product being added to the cart
		for ($i = 0; $i < count($product_ids); $i++){
			if ($product_ids[$i] == filter_input(INPUT_GET, 'id')){
				//add item quantity to the existing product in the array
				$_SESSION['shopping_cart'][$i]['quantity'] += filter_input(INPUT_POST, 'quantity');
			}
		}
	}
}
else{//if shopping cart does not exist, create first product with array key 0
   //create array using submitted form data, start from key 0 and fill it with values
      $_SESSION['shopping_cart'][0] = array
(
   'id' => filter_input(INPUT_GET, 'id'),
   'name' => filter_input(INPUT_POST, 'name'),
   'price' => filter_input(INPUT_POST, 'price'),
   'quantity' => filter_input(INPUT_POST, 'quantity')
   );
   }
 }
 
 if(filter_input(INPUT_GET, 'action') == 'delete'){
	 //loop through all products in the shopping cart until it matches with GET id variables
	 foreach($_SESSION['shopping_cart'] as $key => $product){
		 if ($product['id'] == filter_input(INPUT_GET, 'id')){
			 //remove product from the shoppin cart when it matches with the GET id
			unset($_SESSION['shopping_cart'][$key]); 
		 }
	 }
	 //reset session array keys so they match with $product_ids numeric ids
	 $_SESSION['shopping_cart'] = array_values($_SESSION['shopping_cart']);
 }
	 
//pre_r($_SESSION);

function pre_r($array){
	echo '<pre>';
	print_r($array);
	echo '</pre>';
}
?>



<!DOCTYPE html>
 <html>
<head>
<title>Shopping Cart</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
<link rel="stylesheet" href="./css/common.css"/>
</head>
<body>
<div class="container_cart">
<?php

$connect = mysqli_connect('localhost', 'root', 'root', 'onlinestore');
$query = 'SELECT * FROM products WHERE category_id = 2';
$result = mysqli_query($connect,$query);

if ($result):
   if(mysqli_num_rows($result)>0):
        while($product = mysqli_fetch_assoc($result)):
			//print_r($product);
 
?>
<div class="col-sm-4 col-md-3">
<form method="post" action="cart.php?action=add&id=<?php echo $product['id'];?>">
<div class="products">
<a href="product_details.php?id=<?php echo $product['id'];?>"><img src="<?php echo $product['image']; ?>" class="img-responsive"/></a>
<a href="product_details.php?id=<?php echo $product['id'];?>"><h4 class="text-info"><?php echo $product['name']; ?></h4></a>
<h4>R <?php echo $product['price']; ?></h4>
<input type="text" name="quantity" class="form-control" value="1"/>
<input type="hidden" name="name" value="<?php echo $product['name']; ?>"/>
<input type="hidden" name="name" value="<?php echo $product['price']; ?>"/>
<input type="submit" name="add_to_cart" style="margin-Top: 5px;" class="btn btn-info" value="Add to Cart"/>
</div>
</form>
</div>
<?php
endwhile;
endif;
endif;
?>

<?php
include_once('template_footer.php');
?>
</body>

</html>








