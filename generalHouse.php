<?php
  require_once "Dao.php";
  $dao = new Dao();
  // $info = array();
 $type = $_GET["type"];
 $id = $_GET["id"];
 $info =  $dao->getAllHouseInfo($id, $type);
 ?>
 <html>
   <head>
     <title>CADAVenturs - Rentals</title>
     <link rel="stylesheet" type="text/css" href="index.css">
     <link rel="shortcut icon" type="image/ico" href="favicon (1).ico"/>
   </head>
   <body class="gen-body">
     <div>
       <?php require_once "nav.php";?>
     </div>
     <div class="content">
       <div class="info">
         <ul>
           <li class="apply">  <a href="
             <?php if (isset($_SESSION["access_granted"]) && $_SESSION["access_granted"]) {
               echo "CIApp.php?type=$type&id=$id";
             }else{
               echo "log-in.php";
             } ?>">apply</a></li>
         </ul>
         <hr class="info-line">
       </div>
       <div>
         <img class="gen_image" src="<?php echo $info[0]['Photo']; ?>">
       </div>
       <div class="address">
         <p><?php echo $info[0]['StreetAddress']?> <?php echo $info[0]['City']; ?> <?php echo $info[0]['State']; ?></p>
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
