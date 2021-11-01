<<<<<<< HEAD
<?php 

$sName = "localhost";
$uName = "root";
$pass = "";
$db_name = "login";

try {
    $conn = new PDO("mysql:host=$sName;dbname=$db_name", 
                    $uName, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  echo "Connection failed : ". $e->getMessage();
=======
<?php

$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "user_db";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
>>>>>>> 6492c4f9982350bc4dc7a9406a9630b7d50bd2b1
}