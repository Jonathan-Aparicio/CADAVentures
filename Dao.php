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

  public function addUser($username, $password){

     $conn = $this->getConnection();
     $saveQuery =
           "INSERT INTO user
           (Email, Password)
           VALUES
           (:name, :password)";
           $q = $conn->prepare($saveQuery);
            $q->bindParam(":name", $username);
            $q->bindParam(":password", $password);
            $q->execute();

  }

  public function checkExists($username){
    $conn = $this->getConnection();
    $query = "select * from user where Email = :email";
    $q = $conn->prepare($query);
    $q->bindParam(":email",$username);
    $q->execute();

    if($q->fetch()){
      return true;
    }else{
      return false;
    }
  }

  public function checkLog($username, $password){
    $conn = $this->getConnection();
    $query = "select * from user where Email = :email && Password = :pass";
    $q = $conn->prepare($query);
    $q->bindParam(":email",$username);
    $q->bindParam(":pass",$password);
    $q->execute();

    if($q->fetch()){
      return true;
    }else{
      return false;
    }
  }

  public function getUser($username)
	{
		$conn = $this->getConnection();
		$stmt = $conn->prepare("SELECT * FROM user WHERE Email = :uname");
		$stmt->bindParam(":uname", $username);
		$stmt->execute();
		return $stmt->fetch();
	}
  public function getAllHouseInfo($id, $type){
    $conn = $this->getConnection();
    $stmt = $conn->prepare("SELECT * FROM Houses WHERE ID = :id && Type = :type");
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":type", $type);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();
    return $stmt->fetchALL();
  }

  // public function getAllResInfo($id){
  //   $conn = $this->getConnection();
	// 	$stmt = $conn->prepare("SELECT * FROM Residential WHERE ResidentialID = :id");
	// 	$stmt->bindParam(":id", $id);
  //   $stmt->setFetchMode(PDO::FETCH_ASSOC);
	// 	$stmt->execute();
	// 	return $stmt->fetchALL();
  // }
  //
  // public function getAllComInfo($id){
  //   $conn = $this->getConnection();
  //   $stmt = $conn->prepare("SELECT * FROM Commercial WHERE CommercialID = :id");
  //   $stmt->bindParam(":id", $id);
  //   $stmt->setFetchMode(PDO::FETCH_ASSOC);
  //   $stmt->execute();
  //   return $stmt->fetchALL();
  // }
  //
  // public function getAllIndInfo($id){
  //   $conn = $this->getConnection();
  //   $stmt = $conn->prepare("SELECT * FROM Industrial WHERE IndustrialID = :id");
  //   $stmt->bindParam(":id", $id);
  //   $stmt->setFetchMode(PDO::FETCH_ASSOC);
  //   $stmt->execute();
  //   return $stmt->fetchALL();
  // }
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
