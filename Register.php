<?php session_start();  ?>
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
      <form class="log" method="POST" action="Register-handler.php">
        <label for="user">Email:</label>
        <input type="text" name="username" placeholder="Email" id="user"><br>
        <label for="pass">Password:
        <input type="password" name="password" id="password" placeholder="pass">
        <label for="pass">Confrim Password:
        <input type="password" name="Cpassword" id="Cpassword" placeholder="pass"><br>
        <input type="submit"  value="Register">
      </form>
    </div>
    <div>
			<?php
			if(isset($_SESSION['message'])){
				foreach(@$_SESSION['message'] as $message){
					echo "<div class='message'>$message</div>";
				}
			}else{
        echo "PASSWORD MUST BE 4-8 CHARACTERS LONG THAT CONTAINS ONLY UPPER AND
        LOWER CASE CHARACTERS AND DIGGITS 0-9"
      }
			unset($_SESSION['message']);
		?>
  </div>
    <div class="footer">
      <ul>
        <li class="footer-text">@Jonathan Aparicio</li>
        <li class="footer-text"><a href="Contact.php">Contact</a></li>
      </ul>
    </div>
  </body>
</html>
