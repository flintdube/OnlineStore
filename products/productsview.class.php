<?php
/*
 * Products view
 */
include 'products.class.php';
class ProductView extends Products {

  public function showProducts() {
    $results = $this->getProducts();
    return $results;
  }

  public function showProduct($id) {
    return $this->getProduct($id);
  }
}
?>