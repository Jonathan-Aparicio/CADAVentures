<html>
  <head>
    <title>CADAVenturs - Rentals</title>
    <link rel="stylesheet" type="text/css" href="index.css"/>
    <link rel="shortcut icon" type="image/ico" href="favicon (1).ico"/>

  </head>
  <body>
    <div>
      <?php require_once "nav.php";?>
    </div>
    <div class="content">
      <div class="info">
        <ul>
          <li class="contact-us"><a href="Contact.php">Contact Us</a></li>
          <li class="main-req">
            <a href="
            <?php if (isset($_SESSION["access_granted"]) && $_SESSION["access_granted"]) {
              echo "Maintence.php";
            }else{
              echo "log-in.php";
              $_SESSION['target'] = "Maintence.php";
            } ?>"
            >Maintenance Request</a></li>
          <li class="Pay"><a href="PayApp.php">Pay Online</a></li>
        </ul>
        <hr class="info-line">
      </div>
      <div id="slider">
        <div><a href="generalHouse.php?type=Residential&id=1">
          <img class="image" src="GreenHouse.jpg" alt="Residential Green House">
        </a></div>
        <div><a href="generalHouse.php?type=Residential&id=2">
          <img class="image-item" src="white house.jpg"></a></div>
        <div><a href="generalHouse.php?type=Residential&id=3">
          <img class="image-item" src="RedHouse.jpg"></a></div>
      </div>
      <a href="#" id="ui-carousel-next">next</a>
	     <a href="#" id="ui-carousel-prev">prev;</a>
    </div>
    <div class="footer">
      <ul>
        <li class="footer-text">@Jonathan Aparicio</li>
        <li class="footer-text"><a href="Contact.php">Contact</a></li>
      </ul>
    </div>
  </body>
</html>
