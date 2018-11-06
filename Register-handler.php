<?php
// session_start();
  require_once "Dao.php";
  $dao = new Dao();

  $username = $_POST['username'];
  $password = $_POST['password'];
  $Cpassword = $_POST['Cpassword'];
  $status = true;

  if(empty($_POST['username'])){
    $status = false;
  }else if(!filter_var($username, FILTER_VALIDATE_EMAIL)){
    echo "Bad username";
    $status = false;
  }

  if(empty($_POST['password'])){
    $status = false;
  }else if(!preg_match('/([A-Z]|[0-9]|[a-z]){4,8}/')){
    echo "Bad pasword";
    $status = false;
  }

  if(empty($_POST['Cpassword'])){
    $status = false;
  }else






  if($dao->checkExists($username)){
  echo "user allready exist";
}else if($status == false){
  echo "bad username or password";
}else{
    $dao->addUser($username,$password);
    header("Location: log-in.php");
  }
?>
