<?php
// Dao.php
// class for getting products in MySQL
class Dao {

  private $host = "us-cdbr-iron-east-01.cleardb.net";
  private $db = "heroku_3712059cbd79f9e";
  private $user = "b99574f997df30";
  private $pass = "b91b8492";

  public function getConnection () {
    return
      new PDO("mysql:host={$this->host};dbname={$this->db}", $this->user,
          $this->pass);
  }
  //
  // public function getProducts () {
  //   $conn = $this->getConnection();
  //   return $conn->query("SELECT id, name FROM product");
  // }
  //
  // public function getProduct ($id) {
  //   $conn = $this->getConnection();
  //   $getQuery = "SELECT id, name, description, image_path FROM product WHERE id = :id";
  //   $q = $conn->prepare($getQuery);
  //   $q->bindParam(":id", $id);
  //   $q->execute();
  //   return reset($q->fetchAll());
  // }
  //
  // public function saveProduct ($name, $description, $imagePath) {
  //   $conn = $this->getConnection();
  //   $saveQuery =
  //       "INSERT INTO product
  //       (name, description, image_path)
  //       VALUES
  //       (:name, :description, :imagePath)";
  //   $q = $conn->prepare($saveQuery);
  //   $q->bindParam(":name", $name);
  //   $q->bindParam(":description", $description);
  //   $q->bindParam(":imagePath", $imagePath);
  //   $q->execute();
  // }

} // end Dao
