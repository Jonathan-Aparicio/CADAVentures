<?php
// session_start();
require_once "Dao.php";
$dao = new Dao();

$username = $_POST['username'];
$password = $_POST['password'];

if($dao->checkExists($username)){
echo "user allready exist";
}else{
  $dao->addUser($username,$password);
  $dao->getUser($username);
  //echo $dao->getUser($username);
  //header("Location: index.php");
  // exit;
}
?>