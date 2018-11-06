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
    echo "start add user";
     $conn = $this->getConnection();
     $saveQuery =
           "INSERT INTO user
           (username, password)
           VALUES
           (:name, :password)";
           $q = $conn->prepare($saveQuery);
            $q->bindParam(":name", $username);
            $q->bindParam(":password", $password);
            $q->execute();
            echo "done adding user";
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
  public function getUser($username)
	{
		$conn = $this->getConnection();
		$stmt = $conn->prepare("SELECT * FROM user WHERE Email = :uname");
		$stmt->bindParam(":uname", $username);
		$stmt->execute();
    echo $stmt->fetch();
		return $stmt->fetch();
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
