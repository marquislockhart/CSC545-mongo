<html>
<head>
      <title>Redirecting</title>
      <meta http-equiv = "refresh" content = "2; url = home.php" />
</head>
<body>

<?php
require 'vendor/autoload.php';
$value1 = $_POST["username"];
$value2 = $_POST["pwd"];
$value3 = $_POST["roleid"];
$value4 = $_POST["emailadd"];
$value5 = $_POST["fname"];
$value6 = $_POST["lname"];
$value7 = $_POST["bdate"];
$value8 = $_POST["gender"];
$value9 = $_POST["phone"];

echo $value1;
echo "  ";
echo $value2;
echo " ";
echo $value3;
echo " ";
echo $value4;
echo $value5;
echo "  ";
echo $value6;
echo " ";
echo $value7;
echo " ";
echo $value8;
echo " ";
echo $value9;
//mongodb access code

$m = new MongoDB\Client("mongodb://localhost:27017");
$db = $m->artgallery;
//echo "Connected to database artgallery ";

$collectionn=$db->user;

//echo user collection selected. ";
$insertOneResult = $collectionn->insertOne(
//['StudentID'=>'741790','FirstName'=>'richard','LastName'=>'hall','Gender'=>'Male','DeptName'=>'csc','TotalCredits'=>'55','CGPA'=>'3.9']
//['user_name'=>$value1,'password'=>$value2,'role_id'=>$value3,'email'=>$value4,'first_name'=>$value5,'last_name'=>$value6,'birth_date'=>$value7,'gender'=>$value8,'phone_number'=>$value9]
['user_name'=>$_POST["username"],'password'=>$_POST["pwd"],'role_id'=>$_POST["roleid"],'email'=>$_POST["emailadd"],'first_name'=>$_POST["fname"],'last_name'=>$_POST["lname"],'birth_date'=>$_POST["bdate"],'gender'=> $_POST["gender"],'phone_number'=>$_POST["phone"]]
);
printf("Inserted %d documents",$insertOneResult->getInsertedCount());
var_dump($insertOneResult->getInsertedId());

/*$servername = "localhost";
$username = "root";
$password = "";
$dbname = "artgallery";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
	echo "<br/>connected to database successfully<br/>";
}

$sql = "insert into user (user_name,password,role_id,email,first_name,last_name,birth_date,gender,phone_number) values ('$value1', '$value2', '$value3','$value4','$value5','$value6','$value7','$value8','$value9')";
if ($conn->query($sql) === TRUE) {
    echo "<br>Inserted successfully<br>";
} else {
    echo "<br>Error creating table: " . $conn->error;
}
$conn->close();*/

?>

</body>
</html>