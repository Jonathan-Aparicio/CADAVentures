<html>
  <head>
    <title>CADAVenturs - Rentals</title>
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="shortcut icon" type="image/ico" href="favicon (1).ico"/>
  </head>
  <body>
    <div>
      <?php require_once "nav.php";
      $message = isset($_SESSION['message']) ? $_SESSION['message'] : '';
      unset($_SESSION['message']);?>
    </div>
    <!-- <div class="nav-bar" id="nav-bar">
      <ul >
        <li class="Home" id+"current page">
          <a href="index.php"> Home</a>
        </li>
        <li class="Residential"><a href="Residential.php">Residential</a></li>
        <li class="Commercial"><a href="Commercial.php">Commercial</a></li>
        <li class="Industrial"><a href="Industrial.php">Industrial</a></li>
      </ul >
    </div> -->
    <?php if(!empty($message)) { ?>
    <div class='message'>
      <h2><?php echo $message; ?></h2>
    </div>
  <?php } ?>
    <div class="content">
      <!-- <form action="http://webster.cs.washington.edu/params.php"> -->
      <form class="log" method="POST" action="Register-handler.php">
        <label for="user">User Name:</label>
        <input type="text" name="username" placeholder="user name" id="user"><br>
        <label for="pass">Password:<br>
        <input type="password" name="password" id="password" placeholder="pass">
        <label for="pass">Confrim Password:<br>
        <input type="password" name="Cpassword" id="Cpassword" placeholder="pass">
        <input type="submit"  value="Register">
      </form>
    </div>
    <div class="footer">
      <ul>
        <li class="footer-text">@Jonathan Aparicio</li>
        <li class="footer-text"><a href="Contact.php">Contact</a></li>
      </ul>
    </div>
  </body>
</html>
