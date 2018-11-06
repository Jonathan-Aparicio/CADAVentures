<?php
session_start();
require_once "Dao.php";
$dao = new Dao();

$username = $_POST['username'];
$password = $_POST['password'];

if($dao->checkLog($username,$password)){
  $_SESSION["access_granted"]=true;
  header("Location: index.php");
  echo "log in";
}else{
  $status = "Invalid username or password";
 $_SESSION["status"] = $status;
 $_SESSION["email_preset"] = $_POST["email"];
 $_SESSION["access_granted"] = false;

 header("Location:log-in.php");
}
?>
