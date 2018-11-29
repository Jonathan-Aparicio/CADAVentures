<?php session_start(); ?>
<head>
  <title>CADAVenturs - Rentals</title>
  <link rel="stylesheet" type="text/css" href="index.css">
  <link rel="shortcut icon" type="image/ico" href="favicon (1).ico"/>
  <script src="jquery-3.3.1.min.js" type="text/javascript"></script>
  <!-- <script src="slider-handler.js" type="text/javascript"></script> -->
  <link rel="stylesheet" href="slides/css/slider.css" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
  <script src="slides/js/jquery.flexslider-min.js"></script>
</head>
<body>
  <div class="banner">
    <a href="index.php">
    <img class="logo" src="logo.png"></a>
  </div>
  <div class="nav-bar" id="nav-bar">
    <ul >
      <li class="nav-item" id+"current page">
        <a href="index.php"> Home</a>
      </li>
      <li class="nav-item"><a href="Residential.php">Residential</a></li>
      <li class="nav-item"><a href="Commercial.php">Commercial</a></li>
      <li class="nav-item"><a href="Industrial.php">Industrial</a></li>
      <?php if (isset($_SESSION["access_granted"]) && $_SESSION["access_granted"]) :?>
        <li class="nav-item"><a href="log-out.php">log out</a></li>
      <?php else: ?>
        <li class="nav-item"><a href="log-in.php">log in</a></li>
      <?php endif; ?>
    </ul >
  </div>
</body>
<script>
    $(function(){
        $('a').each(function(){
            if ($(this).prop('href') == window.location.href) {
                $(this).addClass('active'); $(this).parents('li').addClass('active');
            }
        });
    });
</script>
