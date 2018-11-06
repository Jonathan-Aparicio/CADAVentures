<?php
include 'Dao.php'
$dao = new Dao();

$username = $_POST['username'];
$password = $_POST['password'];

if($dao->checkExists($username)){

}else{
  $dao->addUser($username,$password);
  header("Location:http://www.cadaventures.com/index.php");
}
?>
