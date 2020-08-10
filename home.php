<?php
?>
<link rel="stylesheet" href="css/home.css">

<style>
h1 {text-align: center;}
p {text-align: center;}
div {text-align: center;}
</style>

<div class='gallery'>
  <h1>Art Gallery</h1>
  <form action="add_art.php">
         <button type="submit">Add Art</button>
  <form action="insert.php" method="get">
  <div class='row'>

  <?php
  require 'vendor/autoload.php';
  $m = new MongoDB\Client("mongodb://localhost:27017");
  $db = $m->artgallery;
  
  $coll = $db->art_work;
    $toot=$coll->find();
    foreach ($toot as $boot){
        $bryan= json_encode($boot["image"], JSON_UNESCAPED_SLASHES);
        echo "<img src=$bryan>";
    }


    ?>

    </div>
</div>
