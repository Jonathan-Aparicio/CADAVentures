<?php
  session_start();
  require_once "Dao.php";
  $dao = new Dao();
  // $info = array();
 $type = $_GET["type"];
 $id = $_GET["id"];
 $info =  $dao->getAllHouseInfo($id, $type);
 $address = $info[0]['StreetAddress'];
 $city =  $info[0]['City'];
 $state = $info[0]['State'];
 $first = "";
 $last = "";
 $phone;
 if(isset($_SESSION['address'])){
   $address = $_SESSION['address'];
 }
 if(isset($_SESSION['city'])){
   echo $_SESSION['city'];
   $city = $_SESSION['city'];
 }
 if(isset($_SESSION['state'])){
   $state = $_SESSION['state'];
 }
 if(isset($_SESSION['first'])){
   $first = $_SESSION['first'];
 }
 if(isset($_SESSION['last'])){
   $last = $_SESSION['last'];
 }
 if(isset($_SESSION['phone'])){
   $phone = $_SESSION['phone'];
 }
 ?>
<html>
  <head>
    <title>CADAVenturs - Rentals</title>
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="shortcut icon" type="image/ico" href="favicon (1).ico"/>
  </head>
  <body>
    <div>
      <?php require_once "nav.php";?>
    </div>
    <div class="content">
    <form action="CIApp-Handler.php" class="app" method="POST">
      <h2>Rental Address</h2>
      <div class = "appForm">
        Address:<br>
        <input type="text" name="address" value="<?= $address; ?>"><br>
        City:<br>
        <input type="text" name="city" value="<?= $city; ?>"><br>
        State:<br>
        <input type="text" name="state" value="<?= $state; ?>"><br>
      </div>
      <h2>Applicant information</h2>
      <div class = "appForm">
        first name:<br>
        <input type="text" name="first" value="<?= $first; ?>"><br>
        Last name:<br>
        <input type="text" name="last" value="<?= $last; ?>"><br>
        Email:<br>
        <input type="email" name="email" value="<?php echo $_SESSION['email']; ?>"><br>
        Phone Number:
        <input type="number" name="phone" value="<?= $phone; ?>"><br>
      </div>
      <input type="submit"  value="Submit">
    </form>
      </div>
      <div class="error-message"><?php
      if(isset($_SESSION['message'])):
        foreach(@$_SESSION['message'] as $message){
          echo "<div class='message'>$message</div>";
        }

      ?>
      </div>
        <?php endif;  unset($_SESSION['message']);?>
    </div>
    <div class="footer">
      <ul>
        <li class="footer-text">@Jonathan Aparicio</li>
        <li class="footer-text"><a href="Contact.php">Contact</a></li>
      </ul>
    </div>
  </body>
</html>
