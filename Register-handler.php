<?php
include 'Dao.php'
$dao = new Dao();

$username = $_POST['username'];
$password = $_POST['password'];

if($dao->checkExists($username)){

}else{
  $dao->addUser($username,$password);
  header("Location:index.php");
}
?>
