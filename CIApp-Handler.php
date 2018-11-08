<?php
session_start();
require_once "Dao.php";
$dao = new Dao();

$address = $_POST['address'];
$_SESSION['address'] = $address;
$address = filter_var($address, FILTER_SANITIZE_STRING);
$city = $_POST['city'];
$_SESSION['city'] = $city;
$city = filter_var($city, FILTER_SANITIZE_STRING);
$state = $_POST['state'];
$_SESSION['state'] = $state;
$state = filter_var($state, FILTER_SANITIZE_STRING);
$first = $_POST['first'];
$_SESSION['first'] = $first;
$first = filter_var($first, FILTER_SANITIZE_STRING);
$last = $_POST['last'];
$_SESSION['last'] = $last;
$last = filter_var($last, FILTER_SANITIZE_STRING);
$email = $_POST['email'];
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$phone = $_POST['phone'];
$_SESSION['phone'] = $phone;
$status = true;
$messages = array();

if(empty($_POST['address'])){
  $status = false;
  $messages[] = "ENTER A ADDRESS";
}else if(!preg_match('/([A-Z]|[0-9]|[a-z]|\s)+/',$address)){
  $messages[] = "ENTER A VALID ADDRESSL";
  $status = false;
}

if(empty($_POST['city'])){
  $status = false;
  $messages[] = "ENTER A CITY";
}else if(!preg_match('/([A-Z]|[a-z])+/',$city)){
  $messages[] = "ENTER VAILD CITY";
  $status = false;
}

if(empty($_POST['state'])){
  $status = false;
  $messages[] = "ENTER A STATE";
}else if(!preg_match('/([A-Z]|[a-z])+/',$state)){
  $messages[] = "ENTER VAILD STATE";
  $status = false;
}

if(empty($_POST['first'])){
  $status = false;
  $messages[] = "ENTER A FIRST NAME";
}else if(!preg_match('/([A-Z]|[a-z])+/',$first)){
  $messages[] = "ENTER VAILD FIRST NAME";
  $status = false;
}

if(empty($_POST['username'])){
  $status = false;
  $messages[] = "ENTER A EMAIL";
}else if(!filter_var($username, FILTER_VALIDATE_EMAIL)){
  $messages[] = "ENTER A VALID EMAIL";
  echo "Bad username";
  $status = false;
}

if(empty($_POST['phone'])){
  $status = false;
  $messages[] = "ENTER A PHONE NUMBER";
}else if(!preg_match('/([0-9])+/',$phone) && strlen($phone) != 10){
  $messages[] = "ENTER VAILD PHONE NUMBER";
  $status = false;
}


if(empty($_POST['last'])){
  $status = false;
  $messages[] = "ENTER A LAST NAME";
}else if(!preg_match('/([A-Z]|[a-z])+/',$last)){
  $messages[] = "ENTER VAILD LAST NAME";
  $status = false;
}

if($status){
  $dao->addApp($address, $city, $state, $first, $last, $email, $phone);
  header("Location: $target");
  exit;
}
$messages[] = "FORM NOT VAILD PLEASE CHECK ERRORS ABOVE";
$_SESSION['message']=$messages;
header("Location:CIApp.php");
exit;

?>
