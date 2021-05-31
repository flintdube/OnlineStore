<?php
/*
 * Products model
 */

include('./database.class.php');
class Products extends DatabaseConnection {

   protected function getProducts() {
      $sql = "select p.id, p.category_id, p.title, p.description, p.image, p.price, p.quantity from products p";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute();
      $result = $stmt->fetchAll();
      return  $result;
   }

   protected function getProduct($id) {
      $sql = "select p.id, p.category_id, p.title, p.description, p.image, p.price, p.quantity from products p where p.id =?";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$id]);
      $result = $stmt->fetchAll();
      return  $result;
   }
}
?>