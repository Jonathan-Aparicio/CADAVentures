<?php
// session_start();
require_once "Dao.php";
$dao = new Dao();

$username = $_POST['username'];
$password = $_POST['password'];

if($dao->checkLog($username,$password)){
  echo "log in";
}else{
  echo "not log in";
}
?>
