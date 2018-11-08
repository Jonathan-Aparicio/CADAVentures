<?php
session_start();

  if (isset($_SESSION["access_granted"]) && $_SESSION["access_granted"]) {
    header("Location:index.php");
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
      <form class="log" method="POST" action="log-in-handler.php">
        <label for="user">Email:</label>
        <input type="email" name="username" placeholder="Email" value="<?php echo @$_SESSION['email'];?>" id="user"><br>
        <label for="pass">Password:
        <input type="password" name="password" id="password" placeholder="pass"><br>
        <input type="submit"  value="Submit">
      </form>
      <a href="Register.php">Register</a>
    </div>
    <div class="error-message"><?php
    echo "got message";
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
