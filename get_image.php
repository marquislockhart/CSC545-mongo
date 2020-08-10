<?php
    require 'vendor/autoload.php';
    $m = new MongoDB\Client("mongodb://localhost:27017");
    $db = $m->artgallery;

    $coll = $db->art_work;
    echo "collection selected. ";
    if($_GET){
       $toot=$coll->find();
       foreach ($toot as $boot){
         $bryan= json_encode($boot["image"], JSON_UNESCAPED_SLASHES);
         echo "<img src=$bryan>";
        }
      } 
?>