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
      <div class="info">
        <ul>
          <li class="contact-us"><a href="Contact.php">Contact Us</a></li>
        </ul>
        <hr class="info-line">
          <h2 class="click_info">To see more information about house click on image.</h2>
      </div>
      <div>
        <a href="generalHouse.php?type=Industrial&id=9">
          <img class="image" src="industrial3.jpg" alt="Residential Green House">
        </a>
      </div>
      <div class="image-list">
        <ul>
          <li>
            <a href="generalHouse.php?type=Industrial&id=7">
              <img class="image-item" src="industrial1.jpg">

            </a>
          </li>
          <li>
            <a href="generalHouse.php?type=Industrial&id=8"><img class="image-item" src="industrial2.jpg"></a>
          </li>
          <li>
            <a href="generalHouse.php?type=Industrial&id=9"><img class="image-item" src="industrial3.jpg"></a>
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
