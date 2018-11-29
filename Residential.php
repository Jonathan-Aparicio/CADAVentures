<html>
  <?php require_once "nav.php";?>
  <script>
$(document).ready(function () {
  $('.flexslider').flexslider({
      animation: 'fade',
      controlsContainer: '.flexslider'
  });
});
</script>
  <body>
    <div class="content">
      <div class="info">
        <ul>
          <li class="contact-us"><a href="Contact.php">Contact Us</a></li>
        </ul>
        <hr class="info-line">
        <h2 class="click_info">To see more information about house click on image.</h2>
      </div>
      <div class="flex-container">
      <div class="flexslider">
        <ul class="slides">
          <li><a href="generalHouse.php?type=Residential&id=1">
              <img class="image" src="GreenHouse.jpg" alt="Residential Green House">
            </a></li>
          <li><a href="generalHouse.php?type=Residential&id=1" >
            <img class="image-item" src="GreenHouse.jpg">
          </a></li>
          <li> <a href="generalHouse.php?type=Residential&id=2">
            <img class="image-item" src="white house.jpg"></a></li>
          </ul>
      </div>
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
