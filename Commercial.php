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
          <li><a href="generalHouse.php?type=Commercial&id=4">
            <img class="image" src="store1.jpg" alt="Residential Green House">
          </a></li>
          <li><a href="generalHouse.php?type=Commercial&id=5">
            <img class="image" src="store2.jpg"></a></li>
          <li><a href="generalHouse.php?type=Commercial&id=6">
            <img class="image" src="store3.jpg"></a></li>
          </ul>
      </div>
    </div>
    <br>
    <div class="images">
      <div class="image-list1">
            <a href="generalHouse.php?type=Commercial&id=4"><img class="image-item" src="store1.jpg"></a>
        </div>
        <div class="image-list2">
            <a href="generalHouse.php?type=Commercial&id=5"><img class="image-item" src="store2.jpg"></a>
        </div>
      <div class="image-list3">
            <a href="generalHouse.php?type=Commercial&id=6"><img class="image-item" src="store3.jpg"></a>
      </div>
        </ul>
      </div>
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
