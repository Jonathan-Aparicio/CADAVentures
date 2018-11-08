<?php
  $dao = new Dao();
  $info = array();
  $type = $_GET['type'];
  $id = $_GET['id'];
  $info =  $dao->getAllHouseInfo($id, $type);
  echo "got here";
  // if($type == "Residential"){
  //   $info =  $dao->getAll();
  // }
 ?>
