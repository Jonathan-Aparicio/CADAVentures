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
  <body>
    <div>
      <?php require_once "nav.php";?>
    </div>
    <div class="content">
    <form action="CIApp-Handler.php" class="app" method="POST">
      <h2>Rental Address</h2>
      <div class = "appForm">
        <label for="address">Address:</label>
        <input type="text" name="address" value="<?= $address; ?>"><br>
        <label for="city">City:</label>
        <input type="text" name="city" value="<?= $city; ?>"><br>
        <label for="state">State:</label>
        <input type="text" name="state" value="<?= $state; ?>"><br>
      </div>
      <h2>Applicant information</h2>
      <div class = "appForm">
        <label for="first name">first name:</label>
        <input type="text" name="first" value="<?= $first; ?>"><br>
        <label for="last name">Last name:</label>
        <input type="text" name="last" value="<?= $last; ?>"><br>
        <label for="email">Email:</label>
        <input type="email" name="email" value="<?php echo $_SESSION['email']; ?>"><br>
        <label for="phone number">Phone Number:
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
