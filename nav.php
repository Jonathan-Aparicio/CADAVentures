<?php session_start(); ?>
<head>
  <title>CADAVenturs - Rentals</title>
  <link rel="stylesheet" type="text/css" href="index.css">
  <link rel="shortcut icon" type="image/ico" href="favicon (1).ico"/>
  <script src="jquery-3.3.1.min.js" type="text/javascript"></script>
  <!-- <link rel="stylesheet" href="skippr-master/dist/skippr.css"> -->
  <script src="slider-handler.js" type="text/javascript"></script>
  <script type="text/javascript" src="ryrych-rcarousel-3b32a0b/widget/lib/jquery.ui.core.min.js"></script>
  <script type="text/javascript" src="ryrych-rcarousel-3b32a0b/widget/lib/jquery.ui.widget.min.js"></script>
  <script type="text/javascript" src="ryrych-rcarousel-3b32a0b/widget/lib/jquery.ui.rcarousel.min.js"></script>
  <link type="text/css" rel="stylesheet" href="ryrych-rcarousel-3b32a0b/widget/css/rcarousel.css" />
</head>
<body>
  <div class="banner">
    <img class="logo" src="logo.png">
  </div>
  <div class="nav-bar" id="nav-bar">
    <ul >
      <li class="Home" id+"current page">
        <a href="index.php"> Home</a>
      </li>
      <li class="Residential"><a href="Residential.php">Residential</a></li>
      <li class="Commercial"><a href="Commercial.php">Commercial</a></li>
      <li class="Industrial"><a href="Industrial.php">Industrial</a></li>
      <?php if (isset($_SESSION["access_granted"]) && $_SESSION["access_granted"]) :?>
        <li class="log-out"><a href="log-out.php">log out</a></li>
      <?php else: ?>
        <li class="log-in"><a href="log-in.php">log in</a></li>
      <?php endif; ?>
    </ul >
  </div>
</bod>
