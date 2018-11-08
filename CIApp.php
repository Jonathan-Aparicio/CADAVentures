<?php
  require_once "Dao.php";
  $dao = new Dao();
  // $info = array();
 $type = $_GET["type"];
 $id = $_GET["id"];
 $info =  $dao->getAllHouseInfo($id, $type);
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
    <form action="App-Handler">
      <h2>Rental Address</h2>
      <div class = "appForm">
        Address:<br>
        <input type="text" value="<?php echo $info[0]['StreetAddress'] ?>"><br>
        City:<br>
        <input type="text" value="<?php echo $info[0]['City'] ?>"><br>
        State:<br>
        <input type="text" value="<?php echo $info[0]['State'] ?>"><br>
      </div>
      <h2>Applicant information</h2>
      <div class = "appForm">
        first name:<br>
        <input type="text" value="<?php echo $_SESSION['first name'] ?>"><br>
        Last name:<br>
        <input type="text" value="<?php echo $_SESSION['last name'] ?>"><br>
        Email:<br>
        <input type="email" value="<?php echo $_SESSION['email'] ?>"><br>
        Phone Number:
        <input type="text" value="<?php echo $_SESSION['phone'] ?>"><br>
      </div>



    </form>
      </div>
    </div>
    <div class="footer">
      <ul>
        <li class="footer-text">@Jonathan Aparicio</li>
        <li class="footer-text"><a href="Contact.php">Contact</a></li>
      </ul>
    </div>
  </body>
</html>
