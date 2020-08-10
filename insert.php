<?php
require 'vendor/autoload.php';
$m = new MongoDB\Client("mongodb://localhost:27017");
$db = $m->artgallery;

$coll = $db->art_work;
echo "collection selected. ";
if($_POST)

{
    $insert= array(
        '_id'=> $_POST['_id'],
        'artwork_id'=> $_POST['artwork_id'],
        'artist_id'=> $_POST['artist_id'],
        'artwork_title'=> $_POST['artwork_title'],
        'description'=> $_POST['description'],
        'image'=> $_POST['image'],
    );

    if($coll->insertOne($insert))
    {
        echo "data is in!";
    }
    else {
        echo "issues found :( Try again?";
    }
}
elseif($_GET){
    $toot=$coll->find();
    foreach ($toot as $boot){
        $bryan= json_encode($boot["image"], JSON_UNESCAPED_SLASHES);
        echo "<img src=$bryan>";
    }
}

else {
    echo "No Data Found";
}

?>