<html>
  <head>
    <title>CADAVenturs - Rentals</title>
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="shortcut icon" type="image/ico" href="favicon (1).ico"/>
  </head>
  <body>
    <div>
      <?php require_once "nav.php";
      $type = "Residential";?>
    </div>
    <div class="content">
      <div class="info">
        <ul>
          <li class="contact-us"><a href="Contact.php">Contact Us</a></li>
          <li class="apply"><a href="log-in.php">apply</a></li>
        </ul>
        <hr class="info-line">
      </div>
      <div>
        <a href="generalHouse.php?type=Residential&id=1">
          <img class="image" src="GreenHouse.jpg" alt="Residential Green House">
        </a>
      </div>
      <div class="image-list">
        <ul>
          <li>
            <a href="generalHouse.php?type=Residential&id=1" >
              <img class="image-item" src="GreenHouse.jpg">

            </a>
          </li>
          <li>
            <a href="generalHouse.php?type=Residential&id=2"><img class="image-item" src="white house.jpg"></a>
          </li>
          <li>
            <a href="generalHouse.php?type=Residential&id=3"><img class="image-item" src="RedHouse.jpg"></a>
          </li>
        </ul>
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
